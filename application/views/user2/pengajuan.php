

<div class="container">
    <h2>Formulir Pengajuan Tempat</h2>
    <?= validation_errors(); ?>

    <?= form_open('pengajuan/submit'); ?>
        <div class="form-group">
            <label for="nama_tempat">Nama Tempat</label>
            <input type="text" name="nama_tempat" class="form-control" value="<?= set_value('nama_tempat', $user['name']); ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat_tempat">Alamat Tempat</label>
            <input type="text" name="alamat_tempat" class="form-control" value="<?= set_value('alamat_tempat', $user['alamat']); ?>" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required><?= set_value('deskripsi'); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Ajukan</button>
    <?= form_close(); ?>
</div>
