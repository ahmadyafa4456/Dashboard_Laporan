<?= $this->extend('Layout/Layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Bar Chart</div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", async () => {
        const response = await fetch("<?= base_url('/pemasukan') ?>");
        const pemasukanData = await response.json();
        const labelPemasukan = pemasukanData.map(item => item.bulan);
        const totalPemasukan = pemasukanData.map(item => item.total);

        const barChart = document.getElementById("barChart").getContext("2d");
        var myBarChart = new Chart(barChart, {
            type: "bar",
            data: {
                labels: labelPemasukan,
                datasets: [{
                    label: "Pemasukan",
                    backgroundColor: "rgb(23, 125, 255)",
                    borderColor: "rgb(23, 125, 255)",
                    data: totalPemasukan,
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }, ],
                },
            },
        });
    })
</script>
<?= $this->endSection(); ?>