<style media="screen">
.table-bordered{
  border-right: 3px solid black:
}
</style>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="container">
    <br>
    <div class="row">
      <div class="col-md-12" id="hero" style="height:50px; margin:60px 0 60px 0; padding:0;">
        <h1 id="layanan">Pelayanan Bantuan Sosial Desa</h1>
        <h2>Silahkan Lakukan Pelayanan Bantuan Sosial</h2>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("pelayanan/info")?>">
            <img src="<?=base_url()?>assets/img/desa/kepdes.jpg" alt="img" class="img-fluid">
            <h4>Informasi Bantuan Sosial</h4>
            <p>Berisi Informasi Bantuan Sosial</p>
          </a>
          <a href="<?=base_url("pelayanan/info")?>">selengkapnya. . .</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("pelayanan/kategori")?>">
            <img src="<?=base_url()?>assets/img/leader.png" alt="img" class="img-fluid">
            <h4>Data Penerima Bantuan Sosial</h4>
            <p>Berisi Data Penerima Bantuan Sosial</p>
          </a>
          <a href="<?=base_url("pelayanan/kategori")?>">selengkapnya. . .</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("potensi/pendidikan")?>">
            <img src="<?=base_url()?>assets/img/info.png" alt="img" class="img-fluid">
            <h4>Pendataan Ulang Bantuan Sosial</h4>
            <p>Lakukan Pendataan Ulang Bantuan Sosial</p>
          </a>
          <a href="<?=base_url("potensi/pendidikan")?>">selengkapnya. . .</a>
        </div>
      </div>
</section>

<script type="text/javascript">
$(document).ready(function() {
  $('#tbl_potensi').DataTable();
})
</script>
