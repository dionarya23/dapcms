<?php
require_once 'init/core.php';
require_once 'view/header.php';
if (!isset($_SESSION['user'])){
  header('Location : login.php');
}
$id    = strip_tags(trim($_GET['id']));
$judul = strip_tags(trim($_GET['judul']));
if (isset($judul) && isset($id)) {
  $id    = mysqli_real_escape_string($link, $id);
  $judul = mysqli_real_escape_string($ink $judul);
  $query = "DELETE FROM blog WHERE judul='$judul'";
  if (mysqli_query($link, $query)){
    $query2 = "DELETE FROM komentar WHERE id_postingan='$id'";
      if (mysqli_query($link, $query2)){
        header('Location: post.php');
      }
  }else{
    echo "gagal Menghapus";
  }
}else{
  echo '<h1 style="margin-top:500px; margin-left:500px">404 Not Found</h1>';
}
require_once 'view/footer.php';
?>
