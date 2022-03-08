<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="container">

<div class="col-md-12">
  <div class="card">
    <div class="header">
      <h4 class="title" style="text-transform:capitalize;">Persyaratan Bansos</h4>
      <!-- <p class="category">Last Campaign Performance</p> -->
    </div>
    <div class="content">
      <div class="content table-responsive table-full-width">
        <table class="table table-bordered" id="tbl_warga">
          <thead>
            <th>Syarat</th>
          </thead>
          <tbody>
            <?php $i=1; foreach ($syarat as $s): ?>

              <tr>
                <td><?=$s->syarat?></td>
                
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
