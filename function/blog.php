<?php
//ini untuk Daftar
//Untuk mengetahui Apakah Username nya sudah terdaftar belum
function daftar_username($username){
  global $link;
  $username = mysqli_real_escape_string($link, $username);
  $query = "SELECT * FROM users WHERE username='$username'";
  if ($hasil = mysqli_query($link, $query)){
  if(mysqli_num_rows($hasil) == 0){
    return true;
  }else{
    return false;
  }
}
}
//mulai masukan data user ke database
function daftar($nama, $username, $password){
  global $link;
  $nama     = mysqli_real_escape_string($link, $nama);
  $username = mysqli_real_escape_string($link, $username);
  $password = mysqli_real_escape_string($link, $password);

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (nama, username, password) Values('$nama', '$username', '$password')";
  if (mysqli_query($link, $query)){
    return true;
  }else{
    return false;
  }
}
///akhir untuk Daftar///

//untuk Login
function login_username($username){
  global $link;
  $username = mysqli_real_escape_string($link, $username);
  $query = "SELECT * FROM users WHERE username='$username'";
  if ($hasil = mysqli_query($link, $query)){
  if(mysqli_num_rows($hasil) != 0){
    return true;
  }else{
    return false;
  }
}
}

//mulai Login
function login($username, $password){
  global $link;
  $username = mysqli_real_escape_string($link, $username);
  $password  = mysqli_real_escape_string($link, $password);
$query  = "SELECT password FROM users WHERE username = '$username'";
$result = mysqli_query($link, $query);
$hash   = mysqli_fetch_assoc($result)["password"];
if ( password_verify($password, $hash) ){
  $_SESSION['user'] = $username;
   header('Location: dashboard.php');
}else{
  echo '<div style="margin-bottom:20px" class="container w3-container w3-red">
  <h2>Gagal masuk Password Anda Salah Silahkan Ulangi</a></h2>
  </div>';
}
}
//akhir dari Login


//punya kegunaan yang banyak
function kegunaan($username){
  global $link;
  $username = mysqli_real_escape_string($link, $username);
  $query = "SELECT * FROM users WHERE username = '$username'";
  $hasil = mysqli_query($link, $query);
  if (mysqli_num_rows($hasil) > 0){
    return $hasil;
  }else {
    header('Location : login.php');
  }
}

function kirim($judul, $isi, $tag, $nama_gambar){
  global $link;
  $judul = mysqli_real_escape_string($link, $judul);
  $isi   = mysqli_real_escape_string($link, $isi);
  $tag   = mysqli_real_escape_string($link, $tag);
  $nama_gambar = mysqli_real_escape_string($link, $nama_gambar);

  $query = "INSERT INTO blog (judul, isi, tag, gambar) VALUES('$judul', '$isi', '$tag', '$nama_gambar')";
  if (mysqli_query($link, $query)){
    echo '<div class="container w3-container w3-primary">
    <h2>Postingan Anda Berhasil Di Publikasikan</a></h2>
    </div>';
  }else{
    echo '<div class="container w3-container w3-red">
    <h2>Gagal mempublish Postingan anda</a></h2>
    </div>';
  }
}

function kirim2($judul, $isi, $tag, $gambar){
global $link;
  $judul = mysqli_real_escape_string($link, $judul);
  $isi   = mysqli_real_escape_string($link, $isi);
  $tag   = mysqli_real_escape_string($link, $tag);
  $gambar = mysqli_real_escape_string($link, $gambar);

  $query = "INSERT INTO blog (judul, isi, tag, gambar) VALUES('$judul', '$isi', '$tag', '$gambar')";
  if (mysqli_query($link, $query)){
    echo '<div class="container w3-container w3-primary">
    <h2>Postingan Anda Berhasil Di Publikasikan</a></h2>
    </div>';
  }else{
    echo '<div class="container w3-container w3-red">
    <h2>Gagal mempublish Postingan anda</a></h2>
    </div>';
  }
}

function excerpt($string){
  $string = substr($string, 0, 100);
  return $string . "......";
}

function tampil_artikel($judul){
  global $link;
  $judul = mysqli_real_escape_string($link, $judul);
  $query = "SELECT * FROM blog WHERE judul='$judul'";
  $hasil = mysqli_query($link, $query);
  if(mysqli_num_rows($hasil)){
    return $hasil;
  }else{
    echo '<div class="w3-container w3-red">
    <h2>Postingan Tidak di temukan</h2>
    </div>';
  }
}
function untuk_komentar($nama_komentar, $isi_komentar, $id){
  global $link;
  $nama_komentar = mysqli_real_escape_string($link, $nama_komentar);
  $isi_komentar  = mysqli_real_escape_string($link, $isi_komentar);
  $id            = mysqli_real_escape_string($link, $id);

  $query = "INSERT INTO komentar(nama, isi, id_postingan) VALUES('$nama_komentar', '$isi_komentar', '$id')";
  if (mysqli_query($link, $query)){
    echo "komentar Anda Berhasil Dikirim";
  }else{
    echo "komentar anda gagal Dikirim";
  }
}

function untuk_edit($judul){
  global $link;
  $judul = mysqli_real_escape_string($link, $judul);
  $query = "SELECT * FROM blog where judul='$judul'";
  $hasil = mysqli_query($link, $query);
  if (mysqli_num_rows($hasil)){
    return $hasil;
  }else{
    echo "gagal dalam menampilakan data";
  }
}

function update_post($judul, $isi, $gambar, $tag, $id){
  global $link;
  $judul = mysqli_real_escape_string($link, $judul);
  $isi   = mysqli_real_escape_string($link, $isi);
  $tag   = mysqli_real_escape_string($link, $tag);
  $gambar = mysqli_real_escape_string($link, $gambar);
  $id     = mysqli_real_escape_string($link, $id);

  $query = "UPDATE blog SET judul='$judul', isi='$isi', tag='$tag', gambar='$gambar' WHERE id=$id";
  if (mysqli_query($link, $query)){
    echo '<div class="container w3-container w3-primary">
    <h2>Postingan Anda Berhasil Di Update</a></h2>
    </div>';
  }else{
    echo '<div class="container w3-container w3-red">
    <h2>Gagal Mengupdate Postingan anda</a></h2>
    </div>';
  }
}

function post_komentar($id_postingan){
  global $link;
  $id_postingan = mysqli_real_escape_string($link, $id_postingan);
  $query = "SELECT judul FROm blog WHERE id=$id_postingan";
  $hasil = mysqli_query($link, $query);
  $result = mysqli_fetch_assoc($hasil)['judul'];
}

function untuk_pesan($nama, $isi, $waktu){
  global $link;
  $nama = mysqli_real_escape_string($link, $nama);
  $isi   = mysqli_real_escape_string($link, $isi);
  $waktu = mysqli_real_escape_string($link, $waktu);
  $query = "INSERT INTO pesan (nama, pesan, waktu) VALUES ('$nama', '$isi', '$waktu')";
  if(mysqli_query($link, $query)){
    return '<div class="container w3-container w3-primary">
    <h2>Pesan Anda Behasil Dikirim, terimakasih</a></h2>
    </div>';
  }else {
    return '<div class="container w3-container w3-primary">
    <h2>Pesan Anda Gagal Dikirim silahakn ulangi terimakasih</a></h2>
    </div>';
  }
}
 ?>
