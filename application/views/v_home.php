<style media="screen">
	/* .container{
		max-width: none;
	} */
		#cardberitah{
			margin-top: 20px;
		}
		#cardberitah:hover{
		  margin-top: 10px;
		  /* padding-bottom: 10px; */
		  transition: 0.5s;
		  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
		  /* box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.25); */
		}

		@media (max-width: 765px) {
		  #cardberitah{
		    margin: 10px 0;
		  }
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
				<h1 id="layanan">Sekilas Tentang Desa Serut</h1>
				<h2>Berisi Informasi Tentang Wilayah di Desa Serut</h2>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feature-block">
					<a href="<?=base_url("struktur")?>">
						<img src="<?=base_url()?>assets/img/desa/kepdes.jpg" alt="img" class="img-fluid">
						<h4>Struktur Desa</h4>
						<p>Informasi Struktur Desa</p>
					</a>
					<a href="<?=base_url("struktur")?>">selengkapnya. . .</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feature-block">
					<a href="<?=base_url("informasi/index")?>">
						<img src="<?=base_url()?>assets/img/leader.png" alt="img" class="img-fluid">
						<h4>Informasi Desa</h4>
						<p>Berisi Informasi Tentang Desa</p>
					</a>
					<a href="<?=base_url("informasi/index")?>">selengkapnya. . .</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="feature-block">
					<a href="<?=base_url("Kependudukan/index")?>">
						<img src="<?=base_url()?>assets/img/info.png" alt="img" class="img-fluid">
						<h4>Data Kependudukan</h4>
						<p>Berisi Tentang Informasi Kependudukan</p>
					</a>
					<a href="<?=base_url("Kependudukan/index")?>">selengkapnya. . .</a>
				</div>
			</div>
		<div class="col-md-6 col-lg-4">
				<div class="feature-block">
					<a href="<?=base_url("pelayanan/index")?>">
						<img src="<?=base_url()?>assets/img/desa/pelayanan.jpg" alt="img" class="img-fluid">
						<h4>Pelayanan</h4>
						<p>Berisi Tentang Informasi Pelayanan</p>
					</a>
					<a href="<?=base_url("pelayanan/index")?>">selengkapnya. . .</a>
				</div>
			</div>
		<div class="col-md-6 col-lg-4">
				<div class="feature-block">
					<a href="<?=base_url("pengumuman/index")?>">
						<img src="<?=base_url()?>assets/img/desa/papaninfo.png" alt="img" class="img-fluid">
						<h4>Pengumuman</h4>
						<p>Berisi Tentang Informasi Pengumuman Dari Desa</p>
					</a>
					<a href="<?=base_url("pengumuman/index")?>">selengkapnya. . .</a>
				</div>
			</div>
		<div class="col-md-6 col-lg-4">
				<div class="feature-block">
					<a href="<?=base_url("potensi/detail")?>">
						<img src="<?=base_url()?>assets/img/desa/indeks.png" alt="img" class="img-fluid">
						<h4>Indeks Kepuasan</h4>
						<p>Berikan Penilaian Anda Untuk Desa</p>
					</a>
					<a href="<?=base_url("potensi/detail")?>">selengkapnya. . .</a>
				</div>
			</div>
		</div>

		<!--<div class="row pb-5 px-5 mt-3" style="background:rgba(0, 0, 0, 0.8);">
			<div class="col-md-12 pt-3" id="hero" style="height:50px; margin:10px 0 60px 0;">
				<h1 class="text-light" id="layanan">Berita & Informasi</h1>
				<h2 class="text-light">Berisi mengenai berita dan informasi di Desa Serut.</h2>
			</div>
			<?php foreach ($berita as $key => $value): $judul = $value->judul;?>
				<div class="col-md-4 text-left">
					<div id="cardberitah">
						<a href="<?=base_url("berita/detail/$value->judul/$value->id_berita")?>"><img id="imgberita" src="<?=base_url($value->cover_file)?>" alt="Berita" class=""></a>
						<div id="isiberita" class="">
							<label id="tglberita" style="" for="" class=""><i class="fa fa-calendar"></i><?=$value->tgl_berita?></label><br>
							<a id="judulberita" href="<?=base_url("berita/detail/$value->judul/$value->id_berita")?>" style="" class="" data-toggle="tooltip" title="<?=$judul?>"><?=substr($judul, 0, 60); ?>...</a><br>
							<label id="penulis" style="" for="" class="float-left"><?=$value->nama?></label><br>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<div class="col-md-12"></div>
			<a href="<?=base_url("berita/lihat/semua")?>" class="btn btn-light text-dark py-2 mx-auto mt-5" style="border-radius:50px;">Selengkapnya</a>
		</div>
		<br><br>
		<div class="row pb-5 px-5 mt-3" style="background:rgba(0, 0, 0, 0.8);">
			<div class="col-md-12 pt-3" id="hero" style="height:50px; margin:10px 0 60px 0;">
				<h1 id="layanan">Kegiatan Warga</h1>
				<h2>Berikut daftar kegiatan/keluhan warga Desa Serut.</h2>
			</div>
			<?php foreach ($pengaduan as $key => $value): $judul = $value->judul;?>
			<div class="col-md-4 text-left" style="margin-top:15px;">
				<div id="">
					<img id="imgberita" src="<?=base_url($value->lampiran_file)?>" alt="Pengaduan" class="">
					<div id="isiberita" class="pl-2" style="text-transform:capitalize;"><br>
						<label id="tglpengaduan" style="" for="" class=""><i class="fa fa-calendar"></i> <?=$value->tgl_pengaduan?></label><br>
						<label for=""><span class="badge badge-info py-2"><?=$value->bidang?></span>&ensp;<span class="badge badge-warning py-2"><?=$value->kategori?></span> </label><br>
						<a id="judulberita" href="<?=base_url("pengaduan/detail/$value->id_pengaduan")?>" style="" class="" data-toggle="tooltip" title="<?=$judul?>"><?=substr($judul, 0, 60); ?>...</a><br>
						<label id="penulis" style="" for="" class="float-left"><?=$value->nama?></label><br>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
			<div class="col-md-12"></div>
			<a href="<?=base_url("pengaduan/lihat/semua")?>" class="btn btn-light py-2 mx-auto mt-5" style="border-radius:50px;">Selengkapnya</a>
		</div>-->
	</div>
</section>
