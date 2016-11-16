<?php require_once 'init/core.php';
require_once 'view/hdash.php';
if (!isset($_SESSION['user'])){
header('Location: login.php');
}else{
$hasil = kegunaan($_SESSION['user']);
  while($data = mysqli_fetch_assoc($hasil)){
    $nama = $data['nama']; ?>
      <div id="wrapper">
    <?php
require_once 'view/navigation.php'; ?>
<div id="page-wrapper">
<?php
if (isset($_POST['post'])){
  if(!empty($_POST['tag']) || !empty($_FILES['gambar']['name'])){
  $judul = strip_tags(trim($_POST['judul']));
  $nama_gambar   = $_FILES['gambar']['name'];
  $error_gambar  = $_FILES['gambar']['error'];
  $size_gambar   = $_FILES['gambar']['size'];
  $asal_gambar   = $_FILES['gambar']['tmp_name'];
  $format_gambar = $_FILES['gambar']['type'];
  $isi = strip_tags(trim($_POST['isi']));
  $tag = strip_tags(trim($_POST['tag']));
  if ($error_gambar == 0){
    if ($size_gambar < 2000000){
      if ($format_gambar == 'image/jpeg' || 'image/jpg' || 'image/png' || 'image/gif'){
        move_uploaded_file($asal_gambar, 'view/'.$nama_gambar);
        kirim($judul, $isi, $tag, $nama_gambar);
      }else{
        echo '<div class="w3-container w3-red">
        <h1>gambar harus berformat jpg, png, atau gif</h1></div>';
      }
    }else{
      echo '<div class="w3-container w3-red">
      <h1>gambar kebesaran harap dibawah 2mb, silahkan ulangi</h1></div>';
    }
  }else{
    echo '<div class="w3-container w3-red">
    <h1>Ada Error di gambar silahkan ulangi</h1></div>';
  }
}
  }
?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Buat Artikel
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <form role="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Judul Artikel :</label>
                        <input class="form-control" type="text" name="judul" placeholder="Masukan Judul Disini" value="" required>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                      <input type="file" name="gambar" required="required">
                        <p>Maksimal 2 mb</p>
                    </div>

                    <div class="form-group">
                        <label>Masukan Isi Artikel :</label>
                        <textarea class="form-control" name="isi" rows="15"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Tags Artikel :</label>
                        <input type="text" name="tag" class="form-control">
</div>
<input type="submit" name="post" value="publikasi" class="btn btn-primary">
                </form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php
}
}
 require_once 'view/footer.php'; ?>
