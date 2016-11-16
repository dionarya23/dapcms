<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Content Management System</title>
  <link rel="stylesheet" href="view/tema.css">
  <link rel="stylesheet" href="view/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-inverse w3-teal">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
    </button>
    <a href="index.php" class="navbar-brand  w3-teal">DAP Cms</a>
  </div>
  <div class="collapse navbar-collapse  w3-teal" id="target-list">
    <ul class="nav navbar-nav  w3-teal">
      <li class="w3-teal"><a class="w3-text-white w3-hover-shadow" href="index.php">Home</a></li>
      <li class="w3-teal"><a class="w3-text-white w3-hover-shadow" href="about.php">Tentang</a></li>
      <li class="w3-teal"><a class="w3-text-white w3-hover-shadow" href="kontak.php">Hubungi Dap</a></li>
        </ul>
        <form role="search" action="search.php" class="navbar-form navbar-right" method="get">
          <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="cari disini">
            <input type="submit" name="cari" class="btn btn-info" value="Cari">
          </div>
        </form>
  </nav>
