<div class="container-fluid ">
      <div class="row p-5 ">
      <?php foreach ($tempat as $tmpt) : ?> 
          <div class="card m-5 bg-light text-dark" style="width:500px; height:640px;">
              <div class="card-body align-justify">
                  <h5 class="card-title text-center"><strong><?= $tmpt['nama_tempat']; ?></strong></h5><hr>
                  <p class="card-title mb-4"><small>Alamat berada di <?= $tmpt['alamat_tempat']; ?><br>Untuk jurusan <?= $tmpt['Jurusan']; ?></small></p>
                  <img src="<?= base_url().'/uploads/' .$tmpt['gambar'];?>"  style="width:440px; height:420px;" class="rounded">
                  <a href="<?= base_url('Beranda/detail/'). $tmpt['id_tempat']; ?>" class="btn btn-secondary mt-4">Detail</a>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
  </div>   
   