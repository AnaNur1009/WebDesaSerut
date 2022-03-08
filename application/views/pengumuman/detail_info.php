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
<div>
  <h5 class="card-header">Detail Informasi</h5>
  <div class="card-body">

<?php foreach($detail as $d) : ?>
    <div class="row">
    	<div class="col-md-4">
    		<img src="<?php echo base_url().'/uploads/'.$d->foto?>" class="card-img-top">
    	</div>

    	<div class="col-md-8">
    		<table class="table">
          <tr>
            <td>Penulis</td>
            <td><strong><?php echo $d->nama ?></strong></td>
          </tr>

          <tr>
            <td>NIP</td>
            <td><strong><?php echo $d->nip ?></strong></td>
          </tr>

    			<tr>
    				<td>Perihal</td>
    				<td><strong><?php echo $d->perihal ?></strong></td>
    			</tr>

    			<tr>
    				<td>Isi</td>
    				<td><strong><?php echo $d->isi ?></strong></td>
    			</tr>
</table>
           
    	</div>
    </div>
<?php endforeach; ?>
  </div>
</div>

</div>

</section>