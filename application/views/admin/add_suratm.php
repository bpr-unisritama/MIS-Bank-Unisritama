<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini untuk registrasi Surat Masuk. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Surat Masuk</h4>
                        </div>
                        <div class="col-4">
                            <a href="<?= base_url('admin/in_mail'); ?>" class="btn btn-success btn-user float-right">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-12">
                            <form class="user" method="post" action="<?= base_url('admin/new_mail'); ?>" enctype="multipart/form-data">
                                <div class="form-group col-9 mx-auto">
                                    <label>Tanggal Terima</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control date-picker" name="tgl_terima" id="tgl_terima" placeholder="Enter Tanggal Terima" value="<?= set_value('tgl_terima'); ?>" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text fas fa-calendar-alt" id="tgl"></span>
                                        </div>
                                    </div>
                                    <?php echo form_error('tgl_terima', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>Tanggal Surat</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control date-picker" name="tgl_surat" id="tgl_surat" placeholder="Enter Tangal Surat" value="<?= set_value('tgl_surat');?>" data-date-format="dd/mm/yyyy">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text fas fa-calendar-alt" id="tgl"></span>
                                            </div>
                                    </div>
                                    <?php echo form_error('tgl_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>Asal</label>
                                    <input type="text" class="form-control" name="asal" id="asal" placeholder="Enter Asal Pengirim" value="<?= set_value('asal'); ?>">
                                    <?php echo form_error('asal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>Tujuan</label>
                                    <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Enter Tujuan" value="<?= set_value('tujuan'); ?>">
                                    <?php echo form_error('tujuan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>No. Surat</label>
                                    <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="Enter Folder" value="<?= set_value('no_surat'); ?>">
                                    <?php echo form_error('no_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>Perihal</label>
                                    <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Enter Perihal.." value="<?= set_value('perihal'); ?>">
                                    <?php echo form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>Jumlah Lampiran</label>
                                    <input type="text" class="form-control" name="lampiran" id="lampiran" placeholder="Enter Jumlah Lampiran.." value="<?= set_value('lampiran'); ?>">
                                    <?php echo form_error('lampiran', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-9 mx-auto">
                                    <label>Kategori Surat</label>
                                    <select class="form-control custom-select custom-select-md" id="kategori" name="kategori">
                                        <option value="" disabled diselected>--Pilih Kategori--</option>
                                        <?php foreach ($kategori as $row) : ?>
                                            <option value="<?= $row->id_kategori; ?>"><?= $row->kategori; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-9 mx-auto">
                                    <label>Sifat Surat</label>
                                    <select class="form-control custom-select custom-select-md" id="jenis" name="jenis">
                                        <option value="" disabled diselected>--Pilih Lokasi Simpan--</option>
                                        <?php foreach ($jenis as $row) : ?>
                                            <option value="<?= $row->id_type; ?>"><?= $row->type; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-9 mx-auto">
                                    <label>Lokasi Penyimpanan</label>
                                    <select class="form-control custom-select custom-select-md" id="lokasi" name="lokasi">
                                        <option value="" disabled diselected>--Pilih Lokasi Simpan--</option>
                                        <?php foreach ($lokasi as $loc) : ?>
                                            <option value="<?= $loc->id_lokasi; ?>"><?= $loc->lokasi; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-9 mx-auto">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="ket" id="ket" placeholder="Enter Keterangan" value="<?= set_value('ket') ?>">
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center">
                                    <div class="col-3">
                                        <a href="<?= base_url('admin/in_mail'); ?>" class="btn btn-google btn-user btn-block">Cancel</a>
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

<script type="text/javascript">
    $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>