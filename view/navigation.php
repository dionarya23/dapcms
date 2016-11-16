        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Lihat Blog</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                                    <?php
                                    $query = "SELECT * FROM pesan ORDER BY id DESC LIMIT 2";
                                    $hasil = mysqli_query($link, $query);
                                    if(mysqli_num_rows($hasil) > 0){
                                      while ( $pesan = mysqli_fetch_assoc($hasil) ){
                                        $nama_pesan = $pesan['nama'];
                                        $isi  = $pesan['pesan'];
                                        $waktu = $pesan['waktu'];
                                        $id    = $pesan['id'];
                                     ?>
                                     <li class="message-preview">
                                         <a href="#">
                                             <div class="media">
                                                 <span class="pull-left">
                                                     <img class="media-object" src="http://placehold.it/50x50" alt="">
                                                 </span>
                                     <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $nama_pesan; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> <?php echo $waktu; ?></p>
                                        <p><?php echo $isi;?></p>
                                        </div>
                                      </div>
                                  </a>
                              </li>
                                        <?php }
                                      }
                                      ?>
                        <li class="message-footer">
                            <a href="pesan.php">Lihat Semua Pesan</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nama;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="pesan.php"><i class="fa fa-fw fa-envelope"></i> Pesan Masuk</a>
                        </li>
                        <li>
                            <a href="editpass.php"><i class="fa fa-fw fa-gear"></i> Ubah Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Artikel <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="posting.php">Buat Artikel</a>
                            </li>
                            <li>
                                <a href="post.php">Lihat Artikel Anda</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="komentar.php"><i class="fa fa-fw fa-bar-chart-o"></i> Komentar</a>
                    </li>
                    <li>
                        <a href="pesan.php"><i class="fa fa-fw fa-file"></i> Pesan Masuk</a>
                    </li>
                    <li>
                        <a href="editpass.php"><i class="fa fa-fw fa-gear"></i> Ubah Password</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
