<?php require_once 'init/core.php';
require_once 'view/header.php';
if(isset($_POST['kirim'])){
  $nama  = strip_tags(trim($_POST['nama']));
  $pesan = strip_tags(trim($_POST['isi']));
  $waktu = date('H.i - D/d-m-Y');
  echo untuk_pesan($nama, $pesan, $waktu);
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Hubungi Kami !!</h2>
    <p>Silahkan Jika ada pertanyaan silahkan hubungi kami </p>
      <form class="w3-form" action="" method="post">
        <label class="w3-label" for="nama">Nama : </label>
        <input type="text" class="w3-input" name="nama" placeholder="Nama Anda" required>
        <br>
        <label class="w3-label" for="pesan">Pesan :</label>
        <textarea class="form-control" name="isi" rows="15"></textarea><br>
        <input type="submit" name="kirim" value="Kirim" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
<?php require_once 'view/footer.php'; ?>
