<div class="container-fluid">
    <center>
    <div class="card m-4 w-75">
        <?php foreach($tempat as $t) : ?>
        <div class="card-header bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title text-light">Detail Tempat</h4>
                <a href="<?= base_url('Beranda/index/'.$t->id_tempat) ?>" class="btn-close"></a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url().'/uploads/'. $t->gambar ?>" class="card-img-top w-75 h-75 mt-3 rounded">
                </div>
                <div class="col-md-8">
                    <table class="table mt-5">

                        <tr>
                            <td>Nama Perusahaan</td>
                            <td><strong><?= $t->nama_tempat ?></strong></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><strong><?= $t->alamat_tempat ?></strong></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><strong><?= $t->Jurusan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><strong><?= $t->deskripsi ?></strong></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td><strong><?= $t->no_telp ?></strong></td>
                        </tr>
                    </table>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </center>
</div>