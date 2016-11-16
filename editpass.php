<?php require_once 'init/core.php';
require_once 'view/hdash.php';
if (!isset($_SESSION['user'])){
header('Location: login.php');
}else{
$hasil = kegunaan($_SESSION['user']);
  while($data = mysqli_fetch_assoc($hasil)){
    $nama = $data['nama'];
?>
<div id="wrapper">
  <div id="page-wrapper">
<?php require 'view/navigation.php';
  if(isset($_POST['ganti'])){
    $password = strip_tags(trim($_POST['password']));
    $passulang = strip_tags(trim($_POST['passulang']));
    if ($password == $passulang){
      $password = password_hash($password, PASSWORD_DEFAULT);
      $query2    = "UPDATE users SET password='$password' WHERE nama='$nama'";
      if (mysqli_query($link, $query2)){
        echo '<div class="container w3-container w3-primary">
        <h2>Password anda berhasil Di ganti</a></h2>
        </div>';
      }else{
        echo '<div class="container w3-container w3-primary">
        <h2>Password anda tidak bisa di ganti</a></h2>
        </div>';
      }
    }else{
      echo '<div class="container w3-container w3-primary">
      <h2>Password dan Password ulangi tidak Sama Silahkan ulangi</a></h2>
      </div>';
    }
  }
 ?>
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Ganti Password
              </h1>
              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-gear"></i> Ganti Password Kamu
                  </li>
              </ol>
              <form role="form" action="" method="post">

                           <div class="form-group">
                               <label>Password Baru :</label>
                               <input type="password" class="form-control" placeholder="Masukan Password Baru" name="password" required>
                           </div>

                           <div class="form-group">
                               <label>Ulangi Lagi :</label>
                               <input type="password" class="form-control" name="passulang"  placeholder="Ulangi Lagi" required>
                           </div>
                           <input type="submit" name="ganti" value="Ganti Password" class="btn btn-primary">
                         </form>
                         <div class="page-header">
                             <h1>Tentang CMS ini</h1>
                         </div>
                         <div class="well">
                             <p>CMS merupakan Singkatan dari Content Management System, CMS ini dibuat oleh Dion Arya Pamungkas
                             Saya Dion, saya adalah seorang programmer banyak project yang sudah saya kerjakan, ingin memberi saya sebuah kerjaan silahkan
                           hubungi saya via <a href="http://fb.com/dion.aryapamungkas" target="__blank" class="fa fa-facebook">acebook</a>,
                         <a href="http://twitter.com/DionArya_P" target="__blank" class="fa fa-twitter">Twitter</a>, <a href="http://github.com/dionarya6661" target="__blank" class="fa fa-github">Github</a> </p>
                         </div>

            </div>
          </div>
        </div>
        <?php
      }
    }
    require_once 'view/footer.php'; ?>
