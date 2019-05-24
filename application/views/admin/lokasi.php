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
                        <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table table-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Lokasi</th>
                                    <th>Ruangan</th>
                                    <th>Rak</th>
                                    <th>Folder</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot class="table table-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Lokasi</th>
                                    <th>Ruangan</th>
                                    <th>Rak</th>
                                    <th>Folder</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <th><?= $row->lokasi; ?></th>
                                        <th><?= $row->ruangan; ?></th>
                                        <th><?= $row->rak; ?></th>
                                        <th><?= $row->folder; ?></th>
                                        <th><a href="<?= $row->id_lokasi; ?>">Hapus</a></th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->