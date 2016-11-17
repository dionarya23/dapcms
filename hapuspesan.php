<?php
require_once 'init/core.php';
require_once 'view/header.php';
if (!isset($_SESSION['user'])){
  header('Location : login.php');
}
$id = strip_tags(trim($_GET['id']));
if (isset($id)) {
  $id    = mysql_escape_string($link, $id);
  $query = "DELETE FROM pesan WHERE id=$id";
  if (mysqli_query($link, $query)){
    header("Location: pesan.php");
}else{
  echo '<h1 style="margin-top:500px; margin-left:500px">404 Not Found</h1>';
}
}
require_once 'view/footer.php';
?>
