<?php require_once 'init/core.php';
require_once 'view/header.php';
if (isset($_GET['judul']) && isset($_GET['id'])){
  $id = $_GET['id'];
  $judul = $_GET['judul'];
$hasil = tampil_artikel($judul);
  while ($artikel = mysqli_fetch_assoc($hasil)){
    $judul = $artikel['judul'];
    $isi   = $artikel['isi'];
    $tag   = $artikel['tag'];
    $img   = $artikel['gambar'];
    $id    = $artikel['id'];

?>
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $judul;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Index</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"><a href="artikel.php?id=<?php echo $data['id'];?>&judul=<?php echo $data['judul'];?>"><?=$judul;?></a> </i>
            </li>
        </ol>
      <div class="container">
        <div class="thumbnail">
<img src="view/<?php echo $img ?>" alt="<?php echo $judul?>" width="669px" height="450px">
</div>
<br><br>
<div class="caption">
        <p><?php echo $isi;?></p>
        <o class="breadcrumb">
      <li>  tag : <a class="btn w3-teal" href="search.php?tag=<?php echo $tag;?>"><?php echo $tag;?></a> </li>
      <li>  Penulis : <i>Dion Arya Pamungkas</i></li>
      </ol>
      </div>
    </div>
    </div>
    </div>
  </div>
  <?php
if (isset($_POST['komentar'])){
  $nama_komentar = strip_tags(trim($_POST['nama']));
  $isi_komentar  = strip_tags(trim($_POST['isi']));
  $id_postingan     = $id;
  untuk_komentar($nama_komentar, $isi_komentar, $id_postingan);
}
   ?>
  <div class="container" style="margin-top:50px">
    <div class="row">
      <div class="col-md-8">
  <div class="w3-container w3-teal">
    <h5>Komentar :</h5>
  </div>
  </div>
</div>
</div>
    <div class="container" style="margin-top:15px;border-top: 5px solid grey;">
     <div class="row">
      <div class="col-lg-6">
        <div style="margin-top:15px;">
        <?php
        $judul = mysqli_real_escape_string($link, $id);
        $query = "SELECT * FROM komentar WHERE id_postingan = '$id'";
        $hasil = mysqli_query($link, $query);
        if (mysqli_num_rows($hasil)){
          while ($komentar = mysqli_fetch_assoc($hasil)) {
            $nama_saya = $komentar['nama'];
            $isi_saya  = $komentar['isi'];
         ?>                   <div class="panel panel-primary">
                           <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $nama_saya; ?> Berkata :</h3>
                            </div>
                            <div class="panel-body">
                                <?php echo $isi_saya; ?>
                            </div>
                          </div>
          <?php   }
                  }
                      ?>
                  </div>
                </div>
                        <div class="col-lg-12">
                         <form role="form" action="" method="post">
                           <div class="form-group">
                                    <label>Nama :</label>
                                    <input class="form-control" placeholder="masukan namda anda" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label>Komentar :</label>
                                    <textarea name="isi" class="form-control" rows="3">Komentar anda</textarea><br>
                                    <input type="submit" name="komentar" class="btn btn-primary" value="Komentar">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

<?php }
}
 //require_once 'view/samping.php';
require_once 'view/footer.php'; ?>
