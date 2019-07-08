<link rel="stylesheet" href="<?= base_url('assets/css/image-show.css'); ?>">
<script src="<?= base_url('assets/js/image-show.js'); ?>"></script>
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
                                    <div class="form-group col-12">
                                        <label>Tanggal Terima</label>
                                        <div class="input-group date">
                                            <input disabled type="text" class="form-control date-picker" name="tgl_terima" id="tgl_terima" placeholder="Enter Tanggal Terima" value="<?= $row->tgl_terima; ?>" data-date-format="dd/mm/yyyy">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text fas fa-calendar-alt" id="tgl"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Tanggal Surat</label>
                                        <div class="input-group date">
                                            <input disabled type="text" class="form-control date-picker" name="tgl_surat" id="tgl_surat" placeholder="Enter Tangal Surat" value="<?= $row->tgl_surat; ?>" data-date-format="dd/mm/yyyy">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text fas fa-calendar-alt" id="tgl"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Asal</label>
                                        <input disabled type="text" class="form-control" name="asal" id="asal" placeholder="Enter Asal Pengirim" value="<?= $row->asal; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Tujuan</label>
                                        <input disabled type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Enter Tujuan" value="<?= $row->tujuan; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>No. Surat</label>
                                        <input disabled type="text" class="form-control" name="no_surat" id="no_surat" placeholder="Enter Folder" value="<?= $row->no_surat; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Perihal</label>
                                        <input disabled type="text" class="form-control" name="perihal" id="perihal" placeholder="Enter Perihal.." value="<?= $row->perihal; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Jumlah Lampiran</label>
                                        <input disabled type="text" class="form-control" name="lampiran" id="lampiran" placeholder="Enter Jumlah Lampiran.." value="<?= set_value('lampiran'); ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Kategori Surat</label>
                                        <input disabled type="text" class="form-control" value="<?= $row->kategori; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Sifat Surat</label>
                                        <input disabled type="text" class="form-control" value="<?= $row->type; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Lokasi Penyimpanan</label>
                                        <input disabled type="text" class="form-control" value="<?= $row->lokasi; ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Keterangan</label>
                                        <input disabled type="text" class="form-control" value="<?= $row->ket; ?>">
                                    </div>
                                    <div class="form-group col-12 text-center">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?= $row->perihal; ?>" data-image="<?php echo base_url("assets/img/" . $row->foto); ?>" data-target="#image-show">
                                            <img src="<?php echo base_url("assets/img/" . $row->foto); ?>" class="rounded" alt="<?= $row->perihal; ?>">
                                        </a>
                                    </div>
                                    <hr>
                                </form>
                                <div id="image-show" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0"><?= $row->perihal; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-footer">
                                                    <!-- <button type="button" class="btn btn-primary">Yes</button> -->
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>
    <script>
        $(function() {
            $(document).on('click', '.thumbnail', function(e) {
                e.preventDefault();
                $("#image-show").modal('show');
                $.post('hasil.php', {
                        id: $(this).attr('data-id')
                    },
                    function(html) {
                        $(".modal-body").html(html);
                    }
                );
            });
        });
    </script>