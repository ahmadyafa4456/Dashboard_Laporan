<?= $this->extend('Layout/Layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <button class="btn-export rounded-start-2" id="exports3" type="button">
                                Export
                            </button>
                            <a href="<?= site_url("/pemasukan/bulanan") ?>"
                                class="btn-export rounded-end-2 d-flex align-items-center">
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </a>
                        </div>
                        <div>
                            <ul class="rounded modal-export" id="modal3">
                                <a href="<?= site_url('/pemasukan/export') ?>" asp-action="">
                                    <li class="py-1 modal-sub">Excel</li>
                                </a>
                            </ul>
                        </div>
                        <form method="get" id="dateForm">
                            <div class="input-group">
                                <input type="text" id="customDateInput" name="date"
                                    class="border border-1 rounded-start">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-primary rounded-end"><i
                                            class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Total</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Bulan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pemasukan as $p) : ?>
                                    <tr>
                                        <th><?= $p['total'] ?></th>
                                        <th><?= $p['tanggal'] ?></th>
                                        <th><?= $p['bulan'] ?></th>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const modal = document.getElementById("modal3");
        const exports = document.getElementById("exports3");

        exports.addEventListener("click", () => {
            if (modal.style.display === "block") {
                modal.style.display = "none";
                modal.style.opacity = "1";
                modal.style.top = "15%";
            } else {
                modal.style.display = "block";
                modal.style.opacity = "1";
                modal.style.top = "15%";
            }
        });

        document.addEventListener("click", (event) => {
            if (!modal.contains(event.target) && event.target !== exports) {
                if (modal.style.display === "block") {
                    modal.style.display = "none";
                    modal.style.opacity = "1";
                }
            }
        });
    });
    flatpickr("#customDateInput", {
        dateFormat: "d-m-Y",
        placeholder: ""
    });
</script>
<?= $this->endSection(); ?>