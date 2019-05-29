<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">User dapat melihat surat masuk.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8">
                    <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                    <h4 class="font-weight-bold text-primary">List Surat Masuk</h4>
                </div>
                <div class="col-4"><a href="<?= base_url('admin/new_mail'); ?>" class="btn btn-info btn-user float-right">Registrasi Surat Masuk</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Tgl Terima</th>
                            <th>Tgl Surat</th>
                            <th>Asal Surat</th>
                            <th>Tujuan</th>
                            <th>Perihal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="table table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Tgl Terima</th>
                            <th>Tgl Surat</th>
                            <th>Asal Surat</th>
                            <th>Tujuan</th>
                            <th>Perihal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <th><?= $no++; ?>
                                <th><?= htmlspecialchars($row->tgl_terima); ?></th>
                                <th><?= htmlspecialchars($row->tgl_surat); ?></th>
                                <th><?= htmlspecialchars($row->asal); ?></th>
                                <th><?= htmlspecialchars($row->tujuan); ?></th>
                                <th><?= htmlspecialchars($row->perihal); ?></th>
                                <th>
                                    <a href="#" class="btn btn-sm btn-danger btn-user float-center" data-target="#hapus<?php echo $row->id_suratm; ?>" data-toggle="modal">Hapus</a>
                                    <a href="#" class="btn btn-sm btn-primary btn-user  float-center" data-target="#<?php echo $row->id_suratm; ?>" data-toggle="modal">Edit</a>
                                    <a href="<?= base_url('admin/detail/' . $row->id_suratm); ?>" class="btn btn-sm btn-success btn-user float-center">Detail</a>
                                </th>
                            </tr>
                            <div id="hapus<?= $row->id_suratm; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0">Peringatan!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-body mt-0">Yakin menghapus data ini?</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-primary">Yes</button> -->
                                            <a href="<?= base_url('admin/delete_suratm/' . $row->id_suratm) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->