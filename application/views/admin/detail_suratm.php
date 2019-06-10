<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini untuk Melihat Detail Surat Masuk.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-7">
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
                        <?php foreach ($data as $row) : ?>
                            <form class="user">
                                <div class="form-group col-9">
                                    <label>Tanggal Terima</label>
                                    <div class="input-group date">
                                        <input disabled type="text" class="form-control date-picker" name="tgl_terima" id="tgl_terima" placeholder="Enter Tanggal Terima" value="<?= $row->tgl_terima; ?>" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text fas fa-calendar-alt" id="tgl"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-9">
                                    <label>Tanggal Surat</label>
                                    <div class="input-group date">
                                        <input disabled type="text" class="form-control date-picker" name="tgl_surat" id="tgl_surat" placeholder="Enter Tangal Surat" value="<?= $row->tgl_surat; ?>" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text fas fa-calendar-alt" id="tgl"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-9">
                                    <label>Asal</label>
                                    <input disabled type="text" class="form-control" name="asal" id="asal" placeholder="Enter Asal Pengirim" value="<?= $row->asal; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Tujuan</label>
                                    <input disabled type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Enter Tujuan" value="<?= $row->tujuan; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>No. Surat</label>
                                    <input disabled type="text" class="form-control" name="no_surat" id="no_surat" placeholder="Enter Folder" value="<?= $row->no_surat; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Perihal</label>
                                    <input disabled type="text" class="form-control" name="perihal" id="perihal" placeholder="Enter Perihal.." value="<?= $row->perihal; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Jumlah Lampiran</label>
                                    <input disabled type="text" class="form-control" name="lampiran" id="lampiran" placeholder="Enter Jumlah Lampiran.." value="<?= set_value('lampiran'); ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Kategori Surat</label>
                                    <input disabled type="text" class="form-control" value="<?= $row->kategori; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Sifat Surat</label>
                                    <input disabled type="text" class="form-control" value="<?= $row->type; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Lokasi Penyimpanan</label>
                                    <input disabled type="text" class="form-control" value="<?= $row->lokasi; ?>">
                                </div>
                                <div class="form-group col-9">
                                    <label>Keterangan</label>
                                    <input disabled type="text" class="form-control" value="<?= $row->ket; ?>">
                                </div>
                                <hr>
                            </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->