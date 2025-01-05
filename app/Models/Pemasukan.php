<?php

namespace App\Models;

use CodeIgniter\Model;

class Pemasukan extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'bulan', 'tanggal', 'total'];
    public function TotalBulanan()
    {
        $builder = $this->table('pemasukan');
        $query = $builder->query('SELECT bulan, SUM(total) AS total FROM (SELECT bulan, tanggal, total FROM pemasukan) AS subquery GROUP BY bulan');
        return $query->getResultArray();
    }
}
