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
<?php require 'view/navigation.php'; ?>

    <div id="page-wrapper">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Pesan
              </h1>
              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-fw fa-envelope"></i> Pesan Masuk
                  </li>
              </ol>
              <div class="col-sm-12">
                        <div class="list-group">
                            <li href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Berikut ini beberapa pesan :</h4>
                            </li>
                            <?php
                            $query = "SELECT * FROM pesan ORDER BY id DESC";
                            $hasil = mysqli_query($link, $query);
                            if(mysqli_num_rows($hasil) > 0){
                              while ( $pesan = mysqli_fetch_assoc($hasil) ){
                                $nama = $pesan['nama'];
                                $isi  = $pesan['pesan'];
                                $waktu = $pesan['waktu'];
                                $id    = $pesan['id'];
                                ?>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading"><?php echo $nama;?> :</h4>
                                <p class="list-group-item-text"><?php echo $isi;?></p>
                                <p class="list-group-item-text">Pada : <?php echo $waktu;?> | <a class="btn btn-link" href="hapuspesan.php?id=<?php echo $id;?>">Hapus</a></p>
                            </li>
                  <?php }
                          } ?>
                        </div>
                    </div>
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
  </div>
<?php }
}
require_once 'view/footer.php'; ?>
