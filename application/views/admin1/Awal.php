<!doctype html>
<html lang="en">
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

  <style type="text/css">
        .body1{
            background-image: url('../asset/img/U.jpg') !important;
            background-size: 1365px;
            margin-top: 10px;
            margin-left: 20px;
        }
    </style>
</head>

<body class="body1">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark">
      <div class="container-fluid">

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <a class="btn btn-outline-primary" type="submit" href="<?=base_url('Auth/logout'); ?>">logout</a>
          </form>

        </div>
      </div>
    </nav>
  </header>

<center><div class="class">
<div class="container-fluid mt-5 lg-2">
  <div class="row">
  <div class="col-md-4 mt-5">
  <div class="card mt-5 m-" style="width: 20rem;">
    <div class="card-body">
      <h5 class="card-title">Data Akun</h5>
      <p class="card-text">quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <a href="<?php echo base_url('admin/Admin/ass');?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>

<div class="col-md-4 mt-10">
  <div class="card mt-5 m-" style="width: 20rem;">
    <div class="card-body">
      <h5 class="card-title">Data Post</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <a href="<?php echo base_url('admin/Admin/pt');?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>

<div class="col-md-4 mt-5">
  <div class="card mt-5 m-" style="width: 20rem;">
    <div class="card-body">
      <h5 class="card-title">Data Profil</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
        <a href="<?php echo base_url('admin/Admin/pr');?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>  
</div>
</div>
</center>