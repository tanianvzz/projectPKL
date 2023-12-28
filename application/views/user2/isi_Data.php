<div class="container rounded bg-white bg-primary-subtle mt-4 p-2">
    <?php if (!empty($user)): ?>
        <form action="<?= base_url('Datauser2/isi_data') ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="font-weight-bold">
                        <?= $user['name']; ?>
                    </span><span class="text-black-50">
                        <?= $user['email']; ?>
                    </span><span>
                        </span>
                    </div>
                </div>
                <div class="col-md-12 border-right">
                    <h2 class="text text-center p-3">Isi Data Siswa</h2>

                    <div class="row">

                        <div class="col-md-6"><label class="col-form-label">Nama Lengkap</label><input required type="text"
                                class="form-control" name="name" id="name" placeholder="Nama Lengkap"
                                value="<?= $user['name']; ?>" readonly></div>



                        <div class="col-md-6"><label class="col-form-label">Email</label><input required type="text"
                                class="form-control" name="email" id="email" placeholder="Email"
                                value="<?= $user['email']; ?>" readonly></div>
                                
                                
                                <div class="col-md-6">
                        <label for="inputName" class="col-md-6 col-form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
                            <option value="Laki Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6"><label class="col-form-label">NIS</label><input type="number" class="form-control"
                            placeholder="NIS" value="" name="nis" id="nis"></div>
                    <div class="col-md-6"><label class="col-form-label">Nama Sekolah</label><input required type="text"
                            class="form-control" placeholder="Nama Sekolah" value="" name="nama_sekolah" id="nama_sekolah">
                    </div>
                    <div class="col-md-6"><label class="col-form-label">Tanggal Lahir</label><input required type="date"
                    class="form-control" placeholder="Tanggal Lahir" value="" name="tgl_lahir" id="tgl_lahir"></div>
                    <div class="col-md-6">
                        <label for="inputName" class="col-4 col-form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control form-control-user">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="MultiMedia">Multimedia</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="MultiMedia">Multimedia</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="MultiMedia">Multimedia</option>
                            </select>
                        </div>
                    
                        <div class="col-md-6"><label class="col-form-label">Nomor Pembimbing</label><input required
                        type="number" class="form-control" placeholder="Nomor Pembimbing" value="" name="no_pembimbing"
                        id="no_pembimbing"></div>
                    </div>
                    <div class="col-md-12"><label class="col-form-label">Alamat Sekolah</label><textarea required type="text"
                            class="form-control" placeholder="Alamat Sekolah" value="" name="alamat_sekolah"
                            id="alamat_sekolah"></textarea></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-8 mt-3"><button class="btn btn-primary profile-button" type="submit">Save
                            Profile</button></div>
                        </div>
                        </div>
                    </div>
                </form>
                <?php endif; ?>
</div>