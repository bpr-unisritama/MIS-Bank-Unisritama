<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini untuk registrasi Surat Masuk. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">Surat Masuk</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-12">
                            <form class="user" method="post" action="<?= base_url('admin/add_lokasi'); ?>">
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Tanggal Terima</label>
                                        <input type="text" class="form-control form-control-user" name="lokasi" id="lokasi" placeholder="Enter Lokasi" value="<?= set_value('type'); ?>">
                                        <?php echo form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-4">
                                        <label>Tanggal Surat</label>
                                        <input type="text" class="form-control form-control-user" name="ruangan" id="ruangan" placeholder="Enter Ruangan" value="<?= set_value('ruangan'); ?>">
                                        <?php echo form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Asal</label>
                                        <input type="text" class="form-control form-control-user" name="rak" id="rak" placeholder="Enter Rak" value="<?= set_value('rak'); ?>">
                                        <?php echo form_error('rak', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-4">
                                        <label>Tujuan</label>
                                        <input type="text" class="form-control form-control-user" name="folder" id="folder" placeholder="Enter Folder" value="<?= set_value('folder'); ?>">
                                        <?php echo form_error('folder', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-4">
                                        <label>No. Surat</label>
                                        <input type="text" class="form-control form-control-user" name="folder" id="folder" placeholder="Enter Folder" value="<?= set_value('folder'); ?>">
                                        <?php echo form_error('folder', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Perihal</label>
                                        <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Enter Perihal..">
                                        <?= form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-4">
                                        <label>Jumlah Lampiran</label>
                                        <input type="text" class="form-control" name="lampiran" id="lampiran" placeholder="Enter Perihal..">
                                        <?php echo form_error('rak', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Kategori Surat</label>
                                        <select class="form-control custom-select custom-select-md">
                                            <option value="" disabled diselected>--Pilih Kategori--</option>
                                            <option value="">2</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Sifat Surat</label>
                                        <select class=" custom-select custom-select-md">
                                            <option value="" disabled diselected>--Pilih Sifat Surat--</option>
                                            <option value="">2</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Lokasi Penyimpanan</label>
                                        <select class=" custom-select custom-select-md">
                                            <option value="" disabled diselected>--Pilih Lokasi Simpan--</option>
                                            <option value="">2</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center">
                                    <div class="col-3">
                                        <a href="<?= base_url('admin/lokasi'); ?>" class="btn btn-google btn-user btn-block">Cancel</a>
                                    </div>
                                    <div class="col-3">
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