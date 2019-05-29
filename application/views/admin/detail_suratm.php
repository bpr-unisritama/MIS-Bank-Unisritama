<?php foreach ($data as $row) : ?>
    <?= $row->tgl_surat; ?>
    <?= $row->asal; ?>
    <?= $row->tujuan; ?>
    <?= $row->perihal; ?>
    <?= $row->type; ?>
    <?= $row->kategori; ?>
    <?= $row->lokasi; ?>
<?php endforeach; ?>