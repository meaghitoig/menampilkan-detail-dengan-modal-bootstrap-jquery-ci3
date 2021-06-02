<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $pageTitle; ?></title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  
<?php

$name = $userInfo->name;
$id_wajib_pajak = $userInfo->id_wajib_pajak;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-tachometer" aria-hidden="true"></i>Tapping Box
            <small><a href="<?= base_url('') ?>staff/Staf_verifikator/form_tapping_box">input tapping box</a></small>
        </h1>
    </section>
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tapping Box yang di input oleh <?= $name; ?></h3>

                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="#" class="table table-striped table-bordered">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Nama Objek Pajak</th>
                                    <th>NPWPD</th>
                                    <th>Alamat</th>
                                    <th>Status Pemasangan</th>
                                    <th>Jenis</th>
                                    <th>Foto</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody id="#">
                                <?php $no = 1; ?>
                                <?php foreach ($tampil_tapping_box as $tb) : ?>

                                    <?php
                                    if ($name == $tb['user_input']) { ?>
                                        <tr>

                                            <td><?= $no++; ?></td>
                                            <td><?= $tb['nama_op']; ?></td>
                                            <td><?= $tb['npwpd']; ?></td>
                                            <td><?= $tb['alamat']; ?>, Kec <?= $tb['kecamatan']; ?>, Kel <?= $tb['kelurahan']; ?>.</td>
                                            <td><?= $tb['status']; ?></td>
                                            <td><?= $tb['jenis']; ?></td>
                                            <td><img src="/uploads/tapping_box/<?= $tb['image']; ?>" class="img-responsive" width="100"></td>
                                            <td>
                                                <!-- Modal Detail -->
                                                <a class="btn btn-sm btn-primary tmp" id="tampil-detail" data-toggle="modal" data-target="#detail-tapping-box" nama_op="<?= $tb['nama_op']; ?>" npwpd="<?= $tb['npwpd']; ?>" nik="<?= $tb['nik']; ?>" alamat="<?= $tb['alamat']; ?>" status="<?= $tb['status']; ?>" jenis="<?= $tb['jenis']; ?>" tgl_registrasi="<?= $tb['tgl_registrasi']; ?>">Detail</a>

                                                <!-- Modal Edit -->
                                            </td>

                                        </tr>
                                    <?php } ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<!-- Modal Detail-tapping-box -->
<div id="detail-tapping-box" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">tutup</button>
                <h4 class="modal-title text-center"> Detail tapping <?= $name; ?></h4>
            </div>
            <div class="modal-body ">
                <span id="nama_op"></span>

                <span id="npwpd"></span>

                <span id="nik"></span>


                <span id="alamat"></span>

                <span id="status"></span>

                <span id="jenis"></span>

                <span id="tgl_registrasi"></span>
            </div>
        </div>
    </div>
</div>
<!-- Data detail modal -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#tampil-detail', function() {

            var nama_op = $(this).attr('nama_op');
            var npwpd = $(this).attr('npwpd');
            var nik = $(this).attr('nik');
            var alamat = $(this).attr('alamat');
            var status = $(this).attr('status');
            var jenis = $(this).attr('jenis');
            var tgl_registrasi = $(this).attr('tgl_registrasi');

            $('#nama_op').text(nama_op);
            $('#npwpd').text(npwpd);
            $('#nik').text(nik);
            $('#alamat').text(alamat);
            $('#status').text(status);
            $('#jenis').text(jenis);
            $('#tgl_registrasi').text(tgl_registrasi);

        });
    });
</script>


<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>e-BPHTB</b> sibabe | Version 1.0
  </div>
  <strong>Copyright &copy; 2020 - <?= date('Y'); ?> <a href="<?php echo base_url(); ?>">Bapenda Kota Bengkulu</a>.</strong> All rights reserved.
</footer>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script> -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
</body>
