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
      <h2>Struktur Desa</h2>
      <p class="separator" style="margin-top:-20px;">Berikut daftar dan data struktur desa</p>
    </div>
   <div class="content">
      <div class="content table-responsive table-full-width">
        <table class="table table-bordered" id="tbl_pegawai">
          <thead>
            <th>#</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Detail</th>
          </thead>
          <tbody>
            <?php foreach ($desa as $d): ?>

              <tr>
                <td><img src="<?php echo base_url(). '/uploads/'. $d->foto?>" class="card-img" alt="..."></td>
                <td><?=$d->NIP?></td>
                <td><?=$d->Nama?></td>
                <td><?=$d->Jabatan?></td>
                <td class="lengkap">
                  <!-- <a href="#" class="btn btn-info" title="Lihat"><i class="pe-7s-look"></i></a>
                  <a href="#" class="btn btn-success" title="Ubah"><i class="pe-7s-pen"></i></a>
                  <a href="#" class="btn btn-danger" title="Hapus"><i class="pe-7s-trash"></i></a> -->

                  
                  <?php echo anchor('struktur/detail/'. $d->id_pegawai, '<div class="btn btn-info" title="Lihat">Detail</div>') ?></td>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</section>











<!-- <?php //echo form_open_multipart(base_url("surat/isi"),array('class' => 'form-horizontal')); ?>
<textarea name="isiartikel" id="ckeditor" class="ckeditor" rows="8" cols="80"></textarea>
<input type="submit" name="gas" value="Gas">
<?php //echo form_close(); ?>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline = editable;
</script> -->
