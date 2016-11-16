<?php
require_once 'init/core.php';
require_once 'view/header.php';
if (!isset($_SESSION['user'])){
  header('Location : login.php');
}
if (isset($_GET['id'])) {
  $id    = $_GET['id'];
  $query = "DELETE FROM komentar WHERE id=$id";
  if (mysqli_query($link, $query)){
    header("Location: komentar.php");
}else{
  echo '<h1 style="margin-top:500px; margin-left:500px">404 Not Found</h1>';
}
}
require_once 'view/footer.php';
?>
