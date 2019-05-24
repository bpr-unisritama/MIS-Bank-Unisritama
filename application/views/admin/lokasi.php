<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini digunakan untuk Menambah dan menghapus Lokasi Penyimpanan Surat. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">List Penyimpanan</h4>
                        </div>
                        <div class="col-4"><a href="<?= base_url('admin/add_lokasi'); ?>" class="btn btn-facebook float-right">Tambah lokasi</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->