<div class="container-fluid ">
<?php if (!empty($user)): ?>
    <form method="post" action="<?= base_url() . 'profile/tambah_aksi'; ?>" enctype="multipart/form-data"
        class=" text-light rounded m-5 bg-secondary">
        <h3 class="text-center pt-3">ISI FORM DATA PROFILE PERUSAHAAN</h3>
        <center>
            <hr>
        </center>
        <div class="form-group mb-3 m-3">
            <strong>Nama Persusahaan :</strong>
            <input type="text" class="form-control mb-3 mt-2" name="name" required="" placeholder="nama perusahaan"
                value="<?= $user['name']; ?>">
        </div>
        <div class="form-group mb-3 m-3">
            <strong>Deskripsi :</strong>
            <input type="text" class="form-control mb-3 mt-2" name="description" required="" placeholder="deskripsi">
        </div>
        <div class="form-group mb-3 m-3">
            <strong>Alamat :</strong>
            <input type="text" class="form-control mb-3 mt-2" name="address" required="" placeholder="alamat">
        </div>
        <div class="form-group mb-3 m-3">
            <strong>Telepon :</strong>
            <input type="number" class="form-control mb-3 mt-2" name="phone" required="" placeholder="telepon">
        </div>
        <div class="form-group mb-3 m-3">
            <strong>Jenis bidang :</strong>
            <select name="major" id="jurusan" class="form-control form-control-user mb-3 mt-2">
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="MultiMedia">Multimedia</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="MultiMedia">Multimedia</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="MultiMedia">Multimedia</option>
        </select>
        </div>
<button type="submit" class="btn btn-primary m-4">tambah data</button>
</form>
<?php endif; ?>
</div>