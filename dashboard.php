<?php
require_once 'init/core.php';
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
                            Dashboard <small>Statistik Blog Anda</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                        $query3 = "SELECT * FROM komentar";
                                        $hasil1 = mysqli_query($link, $query3);
                                        if(mysqli_num_rows($hasil1)){
                                          $data1 = mysqli_fetch_all($hasil1);
                                            echo count($data1);
                                        }else{
                                          echo 0;
                                        }
                                        ?>
                                    </div>
                                        <div>Komentar</div>
                                    </div>
                                </div>
                            </div>
                            <a href="komentar.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php $query3 = "SELECT * FROM pesan";
                                          $hasil1 = mysqli_query($link, $query3);
                                          if(mysqli_num_rows($hasil1) > 0){
                                            $data1 = mysqli_fetch_all($hasil1);
                                              echo count($data1);
                                          }else{
                                            echo 0;
                                          } ?></div>
                                        <div>Pesan Masuk</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesan.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-edit fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php $query3 = "SELECT * FROM blog";
                                          $hasil1 = mysqli_query($link, $query3);
                                          if(mysqli_num_rows($hasil1) > 0){
                                            $data1 = mysqli_fetch_all($hasil1);
                                              echo count($data1);
                                          }else{
                                            echo 0;
                                          }
                                          ?></div>
                                        <div>Artikel</div>
                                    </div>
                                </div>
                            </div>
                            <a href="post.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-12">
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
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
<?php }
}
require_once 'view/footer.php'; ?>
