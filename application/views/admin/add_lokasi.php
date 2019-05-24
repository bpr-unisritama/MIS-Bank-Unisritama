<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini digunakan untuk Menambah dan menghapus Kategori. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">Add Mail Type</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-12 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_lokasi'); ?>">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Lokasi</label>
                                        <input type="text" class="form-control form-control-user" name="lokasi" id="lokasi" placeholder="Enter Lokasi" value="<?= set_value('type'); ?>">
                                        <?php echo form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-6">
                                        <label>Ruangan</label>
                                        <input type="text" class="form-control form-control-user" name="ruangan" id="ruangan" placeholder="Enter Ruangan" value="<?= set_value('ruangan'); ?>">
                                        <?php echo form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Rak</label>
                                        <input type="text" class="form-control form-control-user" name="rak" id="rak" placeholder="Enter Rak" value="<?= set_value('rak'); ?>">
                                        <?php echo form_error('rak', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-6">
                                        <label>Folder</label>
                                        <input type="text" class="form-control form-control-user" name="folder" id="folder" placeholder="Enter Folder" value="<?= set_value('folder'); ?>">
                                        <?php echo form_error('folder', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-6 mx-auto">
                                        <a href="<?= base_url('admin/lokasi'); ?>" class="btn btn-google btn-user btn-block">Cancel</a>
                                    </div>
                                    <div class="col-6 mx-auto">
                                        <button type="submit" class="btn btn-facebook btn-user btn-block">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->