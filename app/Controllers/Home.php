<?php

namespace App\Controllers;

use App\Models\Pemasukan;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Home extends BaseController
{
    protected $pemasukan;
    public function __construct()
    {
        $this->pemasukan = new Pemasukan();
    }
    public function index()
    {
        $data = [
            'header' => 'Home',
            'title' => 'Laporan Pemasukan'
        ];
        return view('Home/Index', $data);
    }

    public function pemasukan()
    {
        $data = $this->pemasukan->TotalBulanan();
        return $this->response->setStatusCode(200)->setJSON($data);
    }

    public function pemasukanBulanan()
    {
        $date = $this->request->getVar('date');
        if ($date) {
            $pemasukan = $this->pemasukan->where('tanggal', $date)->paginate(5);
        } else {
            $pemasukan = $this->pemasukan->paginate(5);
        }
        $data = [
            'header' => 'Home',
            'title' => 'Laporan Pemasukan Bulanan',
            'pemasukan' => $pemasukan
        ];
        return view('Home/Pemasukan', $data);
    }


    public function pemasukanExport()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Pemasukan');

        $data = $this->pemasukan->findAll();

        $sheet->setCellValue('A1', 'Bulan');
        $sheet->setCellValue('B1', 'Tanggal');
        $sheet->setCellValue('C1', 'Total');

        $sheet->getStyle('A1:C1')->getFont()->setBold(true);
        $sheet->getStyle('A1:C1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item['bulan']);
            $sheet->setCellValue('B' . $row, $item['tanggal']);
            $sheet->setCellValue('C' . $row, $item['total']);

            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'pemasukan.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
