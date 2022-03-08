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
        <h1 id="layanan">Data Kependudukan</h1>
        <h2>Berisi Informasi Tentang Data Penduduk Desa Serut</h2>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("kependudukan/profil")?>">
            <img src="<?=base_url()?>assets/img/desa/kepdes.jpg" alt="img" class="img-fluid">
            <h4>Profil Desa Serut</h4>
            <p>Informasi Profil Desa Serut</p>
          </a>
          <a href="<?=base_url("kependudukan/profil")?>">selengkapnya. . .</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("kependudukan/pekerjaan")?>">
            <img src="<?=base_url()?>assets/img/leader.png" alt="img" class="img-fluid">
            <h4>Pekerjaan Penduduk</h4>
            <p>Berisi Informasi Tentang Desa</p>
          </a>
          <a href="<?=base_url("kependudukan/pekerjaan")?>">selengkapnya. . .</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("kependudukan/pendidikan")?>">
            <img src="<?=base_url()?>assets/img/info.png" alt="img" class="img-fluid">
            <h4>Pendidikan</h4>
            <p>Berisi Tentang Informasi Kependudukan</p>
          </a>
          <a href="<?=base_url("kependudukan/pendidikan")?>">selengkapnya. . .</a>
        </div>
      </div>
    <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("kependudukan/usia")?>">
            <img src="<?=base_url()?>assets/img/info.png" alt="img" class="img-fluid">
            <h4>Rata-Rata Usia Penduduk</h4>
            <p>Berisi Tentang Informasi Usia Penduduk</p>
          </a>
          <a href="<?=base_url("kependudukan/usia")?>">selengkapnya. . .</a>
        </div>
      </div>
    <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("kependudukan/detail")?>">
            <img src="<?=base_url()?>assets/img/info.png" alt="img" class="img-fluid">
            <h4>Rata-Rata Penghasilan Penduduk</h4>
            <p>Berisi Tentang Informasi Penghasilan Penduduk</p>
          </a>
          <a href="<?=base_url("kependudukan/detail")?>">selengkapnya. . .</a>
        </div>
      </div>
    <div class="col-md-6 col-lg-4">
        <div class="feature-block">
          <a href="<?=base_url("kependudukan/agama")?>">
            <img src="<?=base_url()?>assets/img/info.png" alt="img" class="img-fluid">
            <h4>Agama</h4>
            <p>Berisi Informasi Agama Penduduk</p>
          </a>
          <a href="<?=base_url("kependudukan/agama")?>">selengkapnya. . .</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
$(document).ready(function() {
  $('#tbl_potensi').DataTable();
})
</script>
