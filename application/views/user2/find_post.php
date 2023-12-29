<div class="container">
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
      <div class="row p-5">
      <?php foreach ($tempat as $tmpt) : ?>
          <div class="card m-5" style="width:500px; height:620px;">
              <div class="card-body">
                  <h5 class="card-title text-center"><strong><?= $tmpt['nama_tempat']; ?></strong></h5><hr>
                  <p class="card-title"><small>Alamat berada di <?= $tmpt['alamat_tempat']; ?><br>Untuk jurusan <?= $tmpt['Jurusan']; ?></small></p>
                  <img src="<?= base_url().'/uploads/' .$tmpt['gambar'];?>"  style="width:450px; height:420px; border-radius:20px;">
                  <a href="<?= base_url('Datauser2/detail/'). $tmpt['id_tempat']; ?>" class="btn btn-outline-info mt-4">Detail</a>
                  <a href="<?= base_url('Datauser2/ajukan/'). $tmpt['id_tempat']; ?>" class="btn btn-outline-info mt-4" name="ajukan">Ajukan</a>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
  </div>
</div>  