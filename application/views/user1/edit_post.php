<div class="container-fluid">
    <h5 class="d-flex justify-content-center"><i class="fas fa-edit"></i>Edit Postingan</h5>

    <?php if (!empty($tempat) && is_array($tempat)): ?>
        <?php foreach ($tempat as $t): ?>
            <center>
                <form action="<?= base_url('Beranda/update') ?>" method="post" class="w-50 ms-5">
                    <input name="id_tempat" value="<?= $t->id_tempat; ?>" type="hidden">

                    <div class="form-group mb-3">
                        <label class="mb-2 text-primary d-flex justify-content-start">Nama tempat</label>
                        <input type="text" name="nama_tempat" class="form-control" value="<?= $t->nama_tempat; ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label class="mb-2 text-primary d-flex justify-content-start">Alamat tempat</label>
                        <input type="text" name="alamat_tempat" class="form-control" value="<?= $t->alamat_tempat; ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label class="mb-2 text-primary d-flex justify-content-start">Jurusan</label>
                        <input type="text" name="Jurusan" class="form-control" value="<?= $t->Jurusan; ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label class="mb-2 text-primary d-flex justify-content-start">No. Telp</label>
                        <input type="text" name="no_telp" class="form-control" value="<?= $t->no_telp; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary d-flex justify-content-end">Save</button>
                </form>
            </center>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>
</div>
