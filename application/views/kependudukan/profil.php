<style media="screen">
.table-bordered{
  border-right: 3px solid black:
}

#profil p{
  text-indent: 40px;
  font-weight: 350;
}
</style>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="containers">
    <div class="section-title text-center">
      <h2>Profil Desa Serut</h2>
      <!-- <p class="separator" style="">Berikut data golongan darah warga Desa Pagerngumbuk.</p> -->
    </div>
    <div class="row">
      <div class="col-md-12 mt-5 text-left" id="profil">
        <h3>Visi</h3>
        <p class="lead text-center" style="text-transform:capitalize;"></p>
        <br>
        <h3>Misi</h3>
        <p class="text-justify"></p>
        <ul class="">
          <li></li>
        </ul><br>
        <!-- <div class="col-md-12 ml-3"> -->
        <h3>Susunan Organisasi dan Tata Kerja Pemerintah Desa Pagerngumbuk</h3><br>
        <img src="<?=base_url()?>assets/img/susunan.png" alt="" style="width:100%;" id="imgsusunan"><br><br>
        <h3>Jumlah Penduduk</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Jumlah Laki-laki</th>
              <th scope="col">Jumlah Perempuan</th>
              <th scope="col">Jumlah Penduduk</th>
              <th scope="col">Jumlah KK</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
        <!-- </div> -->
        
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: ["A", "B", "AB", "O","Tidak Tahu"],
    // labels: ["A", "B", "AB", "O", "A-", "B-", "AB-", "O-", "A+", "B+", "AB+", "O+","Belum Diketahui"],
    datasets: [
      {
        // label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","red","teal","skyblue","lime","blue","yellow","green","maroon"],
        data: [2478,5267,734,784,433]
        // data: [2478,5267,734,784,433,290,120,175,734,784,433,290,111]
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Total Penduduk : 6651'
    }
  }
});
</script>









<!-- <?php //echo form_open_multipart(base_url("surat/isi"),array('class' => 'form-horizontal')); ?>
<textarea name="isiartikel" id="ckeditor" class="ckeditor" rows="8" cols="80"></textarea>
<input type="submit" name="gas" value="Gas">
<?php //echo form_close(); ?>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline = editable;
</script> -->
