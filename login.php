<?php require_once 'init/core.php';
require_once 'view/header.php';
if(isset($_REQUEST['masuk'])){
  $username = strip_tags(trim($_POST['username']));
  $password = strip_tags(trim($_POST['pass']));
  if ( login_username($username) ){
    login($username, $password);
  }else{
    echo '<div style="margin-bottom:20px" class="container w3-container w3-red">
    <h2>Gagal masuk Username belum terdaftar</a></h2>
    </div>';
  }
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-6 w3-display-middle" style="margin-top:230px">
  <div class="w3-card w3-container w3-teal">
    <h1>Halaman Login Untuk Admin</h1>
  </div>
  <div class="w3-card">
    <form class="w3-form" action="" method="post">
      <label for="username" class="w3-label">Username :</label>
      <input type="text" class="w3-input" name="username" placeholder="masukan Username disini" required>
      <br>
      <label for="pass" class="w3-label">Password</label>
      <input type="password" class="w3-input" name="pass" placeholder="Password" required><br>
      <input type="submit" class="w3-btn w3-teal" name="masuk" value="Masuk">
    </form>
      <br>
      <p>Tidak Punya Akun Silahkan ke halaman <a class="w3-btn w3-teal" href="register.php">Register</a> Untuk Membuat Akun</p>
    </div>
  </div>
</div>
</div>
  <?php require_once 'view/footer.php' ?>
