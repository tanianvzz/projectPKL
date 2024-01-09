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

</head>
<style type="text/css">
  body {
    background-image: url('../../asset/img/bg.jpg');
    background-size: 1365px;
    margin-top: 10px;
    margin-left: 20px;
  }
</style>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark mt-">
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
            <a href="<?php echo base_url('admin/Admin'); ?>" class="btn btn-outline-primary" type="submit">Back</a>

          </form>

        </div>
      </div>
    </nav>
  </header>


 


</body>

</html>
<div class="container-fluid">
  <table class="table table-bordered mt-5">
    <tr>
      <th>ID SISWA</th>
      <th>NAMA SISWA</th>
      <th>EMAIL</th>
      <th>JENIS_KELAMIN</th>
      <th>NAMA_SEKOLAH</th>
      <th>ALAMAT_SEKOLAH</th>
      <th>NIS</th>
      <th>TGL_LAHIR</th>
      <th>JURUSAN</th>
      <th>NO_PEMBIMBING</th>
    </tr>

    <?php
    $no = 1;
    foreach ($profil as $prf): ?>

      <tr>
        <td>
          <?php echo $no++; ?>
        </td>
        <td>
          <?php echo $prf->name ?>
        </td>
        <td>
          <?php echo $prf->email ?>
        </td>
        <td>
          <?php echo $prf->image ?>
        </td>
        <td>
          <?php echo $prf->jenis_kelamin ?>
        </td>
        <td>
          <?php echo $prf->nama_sekolah ?>
        </td>
        <td>
          <?php echo $prf->alamat_sekolah ?>
        </td>
        <td>
          <?php echo $prf->nis ?>
        </td>
        <td>
          <?php echo $prf->tgl_lahir ?>
        </td>
        <td>
          <?php echo $prf->jurusan ?>
        </td>
        <td>
          <?php echo $prf->no_pembimbing ?>
        </td>
      </tr>

    <?php endforeach; ?>

  </table>
</div>