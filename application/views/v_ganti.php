<style media="screen">
/* @import url(https://fonts.googleapis.com/css?family=Roboto:300); */

.login-page {
  width: 360px;
  padding: 5% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

body {
  background: #76b852;
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  /* -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; */
}
</style>
<section id="get-started" class="padd-section wow fadeInUp">
  <div class="container">
    <div class="login-page">
      <div class="form">
        <h2>Ganti Kata Sandi</h2><br>
        <?php echo form_open_multipart(base_url("akun/ganti_pass"),array('class' => 'form-horizontal')); ?>
        <?php echo $this->session->flashdata('error'); ?>
          <input type="password" placeholder="Kata Sandi Lama" name="lama" required/>
          <?=form_error('lama'); ?>
          <input type="password" placeholder="Kata Sandi Baru" name="pass" required/>
          <?=form_error('pass'); ?>
          <input type="password" placeholder="Konfirmasi Kata Sandi" name="conf" required/>
          <?=form_error('conf'); ?>
          <button name="ganti">Simpan</button>
        <?php form_close(); ?>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
// $('.message a').click(function(){
//   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
// });
</script>
