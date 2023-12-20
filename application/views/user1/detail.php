<div class="container-fluid ">
            <div class="card m-3" style="float:center;">
                <div class="row g-0">
                    <?php foreach($tempat as $t) : ?>

                    <div class="card-header bg-success">
                        <div class="modal-header">
                            <h4 class="modal-title text-light">Detail Tempat</h4>
                            <a href="<?= base_url('Beranda/index/'.$t->id_tempat) ?>" class="btn-close"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url().'/uploads/'. $t->gambar ?>" style="width:400px; height:420px; border-radius:20px;" class="m-3 rounded">

                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-5">
                            <h5 class="card-title text-center "><strong><?= $t->nama_tempat ?></strong></h5><hr>
                            <p class="card-text">Alamat : <?= $t->alamat_tempat ?><br> Jurusan : <?= $t->Jurusan ?> <br>
                                Deskripsi : <?= $t->deskripsi?><br> No.telp : <?= $t->no_telp ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
</div>