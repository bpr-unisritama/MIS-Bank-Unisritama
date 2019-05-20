<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <p class="mb-4">Fitur ini digunakan untuk Registrasi User dan Delete User. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8">
                    <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                    <h4 class="font-weight-bold text-primary">List User</h4>
                </div>
                <div class="col-4"><a href="<?= base_url('auth/registration'); ?>" class="btn btn-facebook float-right">Registrasi</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>

                    </tfoot>
                    <tbody>
                        <?php foreach ($users as $row) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row->name); ?></td>
                                <td><?= htmlspecialchars($row->email); ?></td>
                                <td><?= htmlspecialchars($row->role); ?></td>
                                <td><a href="<?php echo $row->uid; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->uid; ?>" data-toggle="modal">Hapus</a></td>
                            </tr>
                            <div id="hapus<?= $row->uid; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                            <a href="<?= base_url('auth/delete/' . $row->uid) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
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