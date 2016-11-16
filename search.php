<?php require_once 'init/core.php';
require_once 'view/header.php'; ?>
<div class="container">
  <div class="row">
<?php if (isset($_GET['cari'])){
  $pencarian = strip_tags(trim($_GET['query']));
  $query = "SELECT * FROM blog WHERE judul LIKE '%$pencarian%'";
  $hasil = mysqli_query($link, $query);
  if (mysqli_num_rows($hasil) > 0){
    while ($q = mysqli_fetch_assoc($hasil)) { ?>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="view/<?php echo $q['gambar']; ?>" width="300px" height="250px" alt="">
          <div class="caption">
            <h1 style="font-size:25px"> <?=$q['judul'];?> </h1>
            <p> <?php echo excerpt($q['isi']); ?> </p>
              <a href="artikel.php?id=<?php echo $q['id'];?>&judul=<?php echo $q['judul'];?>" class="btn btn-danger">Baca Selengkapnya</a>
            </div>
          </div>
          </div>

<?php    }
  } ?>
</div>
</div>
  <?php
}elseif (isset($_GET['tag'])){
  $tag = strip_tags(trim($_GET['tag']));
  $tag = mysqli_real_escape_string($link, $tag);
  $query = "SELECT * FROM blog WHERE tag='$tag'";
  $hasil = mysqli_query($link, $query);
  if (mysqli_num_rows($hasil) > 0){
    while ($data = mysqli_fetch_assoc($hasil)) { ?>
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
<?php    }
  } ?>
</div>
</div>
<?php }else{
  echo '<div class="container">
  <div class="row">
  <div class="col-md-12">
  <h1>404</h1>
  <p>Not Found</p>
  </div>
  </div>
  </div>';
}
require_once 'view/footer.php';?>
