<style media="screen">
  /* .card{
    transition: 0.5s;
  } */

  /* .form-control, .card{
    border: 2px solid black;
  }

  *{
    font-weight: bold;
  } */
  .btn{
    text-transform: capitalize;
    font-family: "Roboto",sans-serif;
    font-weight: bold;
  }

</style>
<section id="get-started" class="padd-section wow fadeInUp">
  <div>
    <?php foreach($detail as $dtl) : ?>
  <h5 class="card-header">Biodata Lengkap <?php echo $dtl->Jabatan ?></h5>
  <div class="card-body">


    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url().'/uploads/'.$dtl->foto?>" class="card-img-top">
      </div>

      <div class="col-md-8">
        <table class="table">
          <tr>
            <td>NIP</td>
            <td><strong><?php echo $dtl->NIP ?></strong></td>
          </tr>

          <tr>
            <td>Nama</td>
            <td><strong><?php echo $dtl->Nama ?></strong></td>
          </tr>

           <tr>
            <td>Jabatan</td>
            <td><strong><?php echo $dtl->Jabatan ?></strong></td>
          </tr>

         
        </table>

          <?php echo anchor('struktur/index/', '<div class="btn btn-sm btn-danger">Back</div>') ?>
      </div>
    </div>
<?php endforeach; ?>
  </div>
</div>
</section>

<script type="text/javascript">
(function ($) {
  $.fn.replaceClass = function (pFromClass, pToClass) {
    return this.removeClass(pFromClass).addClass(pToClass);
  };
}(jQuery));

function pindah(num){
  $('#pills-tab li:nth-child('+num+') a').replaceClass('disabled','enabled');
  $('#pills-tab li:nth-child('+num+') a').tab('show');
  $('#pills-tab li a').replaceClass('enabled','disabled');
}
</script>
