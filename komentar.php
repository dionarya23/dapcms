<?php
require_once 'init/core.php';
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
                  Komentar
              </h1>
              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-comments"></i> Komentar
                  </li>
              </ol>
          </div>
      </div>
        <div class="container-fluid">
          <div class="row">
                       <div class="col-sm-12">
                       <div class="list-group">
                           <a href="#" class="list-group-item active">
                               <h4 class="list-group-item-heading">Komentar Yang Ada Diblog Anda</h4>
                           </a>
                           <?php
                           $query = "SELECT * FROM komentar ORDER BY id DESC";
                           $hasil = mysqli_query($link, $query);
                           if (mysqli_num_rows($hasil)){
                             while($komen = mysqli_fetch_assoc($hasil)){
                                $nama = $komen['nama'];
                                $isi  = $komen['isi'];
                                $id   = $komen['id'];
                                $id_postingan = $komen['id_postingan'];
                                $id_postingan = mysqli_real_escape_string($link, $id_postingan);
                                $query = "SELECT judul FROm blog WHERE id=$id_postingan";
                                $hasil2 = mysqli_query($link, $query);
                              if (mysqli_num_rows($hasil2) > 0){
                                while ($artikel = mysqli_fetch_assoc($hasil2)) {
                                  $judul_id = $artikel['judul'];
                           ?>
                           <li class="list-group-item">
                           <a href="artikel.php?id=<?php echo $id_postingan;?>&judul=<?=$judul_id;?>" class="list-group-item">
                               <h4 class="list-group-item-heading"><?php echo $nama;?></h4>
                               <p class="list-group-item-text"><?php echo $isi;?> di Artikel : <?php echo $judul_id;?><br></p>
                           </a> <a href="hapuskomen.php?id=<?php echo $id;?>">Hapus</a> | <a target="_blank" href="artikel.php?id=<?php echo $id_postingan;?>&judul=<?=$judul_id;?>">Lihat</a></li>
                 <?php }
               }
             }
               }
               ?>
             </div>
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
                   <?php }
                 }
                    require_once 'view/footer.php'; ?>
