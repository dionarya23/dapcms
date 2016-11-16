<?php
require_once 'init/core.php';
require_once 'view/header.php';
?>
<div class="container">
<div class="jumbotron">
<h1>Content Management System</h1>
<p>Hai Selamat datang di DapCMS, cms ini dibuat dengan bahasa pengprograman php dan database Mysql</p>
<i>Dibuat Oleh : Dion Arya Pamungkas</i>
</div>
<?php
$query = "SELECT * FROM blog ORDER BY id DESC";
$hasil = mysqli_query($link, $query);
if (mysqli_num_rows($hasil) > 0){  ?>
  <div class="row">
  <?php
  while($data = mysqli_fetch_assoc($hasil)){
?>
<div class="col-md-4">
  <div class="thumbnail">
    <img src="view/<?php echo $data['gambar']; ?>" width="300px" height="250px" alt="">
    <div class="caption">
      <h1 style="font-size:25px"> <?=$data['judul'];?> </h1>
      <p> <?php echo excerpt($data['isi']); ?> </p>
        <a href="artikel.php?id=<?php echo $data['id'];?>&judul=<?php echo $data['judul'];?>" class="btn btn-danger">Baca Selengkapnya</a>
      </div>
    </div>
    </div>
<?php
}
 }else{
  echo '
  <div class="col-md-8">
  <div class="w3-container w3-red">
  <h1>Belum Ada Post</h1>
  <p>Admin Blog ini belum bikin posting apa</p>
  </div>
  </div>
  '; } ?>
    </div>
    </div>
<?php require_once 'view/footer.php'; ?>
