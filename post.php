<?php require_once 'init/core.php';
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

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Artikel Anda
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Artikel Anda
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="page-header">
                    <h1>List Artikel Anda :</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-group">
                          <div class="list-group">
                              <a href="#" class="list-group-item active">
                                  <h4 class="list-group-item-heading">Artikel Anda :</h4>
                              </a>
                          <?php
                          $query = "SELECT * FROM blog ORDER BY id DESC";
                          $hasil = mysqli_query($link, $query);
                          if (mysqli_num_rows($hasil) > 0){
                            while ($post = mysqli_fetch_assoc($hasil)) {
                              $judul    = $post['judul'];
                              $id_judul = $post['id'];
                          ?>
                            <li class="list-group-item"><?=$judul;?><br>
                            <a class="btn btn-link" href="edit.php?id=<?php echo $id_judul;?>&judul=<?php echo $judul;?>">Edit</a>|<a class="btn btn-link" href="delete.php?id=<?php echo $id_judul;?>&judul=<?php echo $judul;?>">Hapus</a>|<a class="btn btn-link" target="_blank" href="artikel.php?id=<?php echo $id_judul;?>&judul=<?php echo $judul;?>">Lihat</a> </li>

                            <?php
                          }
                        }
                        ?>
                      </div>
                        </ul>
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
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php }
    }
    require_once 'view/footer.php'; ?>
