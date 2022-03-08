
<?php
  $menu = $this->uri->segment(2);
?>

<style media="screen">
  /* .feature-block{
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  } */

  .img-fluid{
    height: 100px;
    width: 100px;
  }
</style>
 <?php foreach($detail as $dtl) : ?>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="containers">
    <div class="section-title text-center" style="margin-top:-10px;">
<div class="col-md-12">
  <div class="card">
    <div class="header">
    <h4 class="title" style="text-transform:capitalize;">Data Penerima Bansos Kategori <?php echo $dtl->jenis ?></h4>
    </div>
    <div class="content">
      <div class="content table-responsive table-full-width">
        <center><table class="table table-bordered" id="tbl_databansos">
          <tbody>
          
      <div class="col-md-8">
        <table class="table">
          <tr>
            <td>NIK</td>
            <td><strong><?php echo $dtl->nik ?></strong></td>
          </tr>

          <tr>
            <td>Nama Lengkap</td>
            <td><strong><?php echo $dtl->nama ?></strong></td>
          </tr>

           <tr>
            <td>Tanggal Lahir</td>
            <td><strong></strong></td>
          </tr>

          <tr>
            <td>Alamat Lengkap</td>
            <td><strong><?php echo $dtl->alamat?></strong></td>
          </tr>

          <tr>
            <td>Pekerjaan</td>
            <td><strong></strong></td>
          </tr>

          <tr>
            <td>No. Telp</td>
            <td><strong></strong></td>
          </tr>

          <tr>
            <td>Jumlah Bantuan</td>
            <td><strong></strong></td>
          </tr>

      </div>
    </div>
<?php endforeach; ?>

          </tbody>
        </table></center>

      </div>
    </div>
  </div>
</div>
<?php echo anchor('pelayanan/kategori/', '<div class="btn btn-sm btn-danger">Back</div>') ?>
</section>
<script type="text/javascript">
$(document).ready(function() {
  $('#tbl_databansos').DataTable();
  $('#tbl_proses').DataTable();
  $('#tbl_selesai').DataTable();
} );
</script>
}