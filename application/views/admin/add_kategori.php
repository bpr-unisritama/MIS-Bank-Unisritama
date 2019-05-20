<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini digunakan untuk Menambah dan menghapus Kategori. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8">
                    <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                    <h4 class="font-weight-bold text-primary">Add Kategori</h4>
                </div>
            </div>
        </div>
        <div class="card-body col-8 mx-auto">
            <div class="table-responsive">
                <div class="col-10 mx-auto">
                    <form class="user" method="post" action="<?= base_url('admin/add_kategori'); ?>">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control form-control-user" name="kategori" id="kategori" placeholder="Enter Kategori" value="<?= set_value('kategori'); ?>">
                            <?php echo form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Alias</label>
                            <input type="text" class="form-control form-control-user" name="alias" id="alias" placeholder="Alias" value="<?= set_value('alias'); ?>">
                            <?php echo form_error('alias', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" class="btn btn-google btn-user btn-block">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->