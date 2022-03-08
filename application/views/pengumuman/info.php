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
<section id="get-started" class="padd-section text-center wow fadeInUp mt-4">
	<div class="container">
		<div class="section-title text-center">
			<!-- <h2>simple systeme fordiscount </h2>
			<p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
		</div>
	</div>

	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-12" id="hero" style="height:50px; margin:60px 0 60px 0; padding:0;">
				<h1 id="layanan">Berisi Informasi Untuk Masyarakat</h1>
				<h2></h2>
			</div>
			<?php foreach ($info as $p): ?>
			<div class="card ml-4" style="width: 18rem;">
  <img src="<?php echo base_url(). '/uploads/'. $p->foto?>" class="card-img" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $p->perihal ?></h5>
    <p class="card-text"><?php echo $p->isi ?></p>
    <?php echo anchor('pengumuman/detail/' .$p->id_pengumuman, '<div class="btn btn-sm btn-secondary">Detail</div>') ?>
  </div>
</div>
<?php endforeach; ?>
	</div>
	
</section>
