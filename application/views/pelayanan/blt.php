
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
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="containers">
    <div class="section-title text-center" style="margin-top:-10px;">
<div class="col-md-12">
  <div class="card">
    <div class="header">
      <h4 class="title" style="text-transform:capitalize;">Data Penerima Bansos Kategori BLT</h4>
    </div>
    <div class="content">
      <div class="content table-responsive table-full-width">
        <center><table class="table table-bordered" id="tbl_databansos">
          <thead>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Jenis Bansos</th>
            <th>Detail</th>
          </thead>
          <tbody>
           <?php foreach ($blt as $d): ?>
              <tr>
                <td><?=$d->tgl?></td>
                <td><?=$d->nama?></td>
                <td><?=$d->nik?></td>
                <td><?=$d->alamat?></td>
                <td><?=$d->jenis?></td>
                <td class="detail"> 

                  <center><?php echo anchor('pelayanan/detail_penerima/'. $d->id_data, '<div class="btn btn-info" title="Lihat">Lihat</div>') ?></center></td>
                </td>
              </tr>
          <?php endforeach; ?>
          </tbody>
        </table></center>
      </div>
    </div>
  </div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function() {
  $('#tbl_databansos').DataTable();
  $('#tbl_proses').DataTable();
  $('#tbl_selesai').DataTable();
} );
</script>
}