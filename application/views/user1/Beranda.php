<div class="container-fluid ">
      <div class="row p-5 ">
      <?php foreach ($tempat as $tmpt) : ?> 
          <div class="card m-5 bg-secondary text-light" style="width:530px; height:620px;">
              <div class="card-body align-justify">
                  <h5 class="card-title text-center"><strong><?= $tmpt['nama_tempat']; ?></strong></h5><hr>
                  <p class="card-title"><small>Alamat berada di <?= $tmpt['alamat_tempat']; ?><br>Untuk jurusan <?= $tmpt['Jurusan']; ?></small></p>
                  <img src="<?= base_url().'/uploads/' .$tmpt['gambar'];?>"  style="width:470px; height:420px; border-radius:20px;">
                  <a href="<?= base_url('Beranda/detail/'). $tmpt['id_tempat']; ?>" class="btn btn-outline-dark mt-4">Detail</a>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
  </div>   
   