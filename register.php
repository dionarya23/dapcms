<?php require_once 'init/core.php';
require_once 'view/header.php';
if (isset($_REQUEST['daftar'])) {
  $nama = strip_tags(trim($_POST['nama']));
  $username = strip_tags(trim($_POST['username']));
  $password = strip_tags(trim($_POST['password']));
  if(daftar_username($username)){
    if (daftar($nama, $username, $password)){
      echo '<div style="margin-bottom:20px" class="container w3-container w3-teal">
      <h2>Berhasil Mendaftar Silahkan Login di <a class="btn w3-teal" href="login.php">Halaman Login</a></h2>
      </div>';
    }else{
      echo '<div style="margin-bottom:20px" class="container w3-container w3-red">
      <h2>Gagal Mendaftar</a></h2>
      </div>';
    }
  }else{
    echo '<div style="margin-bottom:20px" class="container w3-container w3-red">
    <h2>Gagal Mendaftar Username Sudah Ada Silahkan Gunakan Yang Lain</a></h2>
    </div>';
}
}

?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
<div class="w3-teal w3-container">
  <h2>Silhkan Daftar Disini Untuk Bisa membuat Akun</h2>
</div>
  <form class="w3-form w3-card-12" action="" method="post">
    <label class="w3-label" for="nama">Nama :</label>
    <input type="text" name="nama" class="w3-input" placeholder="Nama" required><br>
    <label class="w3-label" for="username">Username :</label>
    <input type="w3-input" name="username" class="w3-input" placeholder="Username" required><br>
    <label class="w3-label" for="password">Password</label>
    <input type="password" name="password" class="w3-input" placeholder="Password" required><br>
    <input type="submit" name="daftar" value="Daftar" class="w3-btn w3-teal">
  </form>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <div class="w3-teal w3-container">
      <h2>Tentang Dap CMS</h2>
    </div>
    <div class="w3-card-12">
      <p class="w3-container">DAP CMS merupakan sebuah konten management system yang di buat oleh seorang Programmer<br>
        Yang Bernama Dion Arya Pamungkas, Yang Sudah melalang melintang di Dunia Pengprograman <br>
        Dion Arya Pamungkas (DAP). <i>"hai nama saya Dion Arya Pamungkas saya adalah seorang programmer dan blogger, saya berpengalaman didunia programming<br>
          banyak project yang sudah saya kerjakan diantaranya saya pernah membuat sebuah aplikasi web dengan nama Embahdap.hol.es merupakan sebuah web ramal. ini merupakan
          Content Management System buatan saya jika berminat silahkan hubungi saya saja di
          <a href="http://fb.com/dion.aryapamungkas" target="_blank" class="w3-btn btn-primary" >Facebook</a>
        <a href="http://twitter.com/DionArya_P" target="__blank" class="w3-btn w3-blue">Twitter</a>
      <a href="http://github.com/dionarya6661" target="__blank" class="w3-btn w3-blu">Github</a></p>
        </div>
      </div>
    </div>
</div>
  <?php require_once 'view/footer.php'; ?>
