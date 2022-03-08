<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="container">

<div class="col-md-12">
	<div class="card">
		<div class="header">
			<h4 class="title" style="text-transform:capitalize;">Informasi Pelayanan Bansos</h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>
		<div class="content">
			<div class="content table-responsive table-full-width">
				<table class="table table-bordered" id="tbl_warga">
					<thead>
						<th>#</th>
						<th>Jenis Bansos</th>
						<th>Syarat</th>
					</thead>
					<tbody>
						<?php $i=1; foreach ($jenis as $j): ?>

							<tr>
								<td><?=$i++?></td>
								<td><?=$j->jenis?></td>
								<td class="tindakan">
									<!-- <a href="#" class="btn btn-info" title="Lihat"><i class="pe-7s-look"></i></a>
									<a href="#" class="btn btn-success" title="Ubah"><i class="pe-7s-pen"></i></a>
									<a href="#" class="btn btn-danger" title="Hapus"><i class="pe-7s-trash"></i></a> -->

									
									<?php echo anchor('pelayanan/syarat/'. $j->id_bansos, '<div class="btn btn-info" title="Lihat">Lihat</div>') ?></td>
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
</div>
<script type="text/javascript">
$(document).ready(function() {
	// $('#tbl_warga').DataTable();
} );
</script>
