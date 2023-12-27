<div class="container rounded bg-white bg-primary-subtle">
<?php if (!empty($user)): ?>
    <h2 class="text text-center p-3">ISI DATA SISWA</h2>
    <form action="<?= base_url('Datauser2') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="<?= base_url('asset/img/profile/'). $user['image']; ?>"><span
                        class="font-weight-bold">
                        <?= $user['name']; ?>
                    </span><span class="text-black-50">
                        <?= $user['email']; ?>
                    </span><span>
                    </span>
                    <span>
                    <div class=""> 
                        <div class="custom-file"> 
                            <input type="file" class="custom-file-input" id="image" name="image"> 
                        </div> 
                    </div> 
                    </span>
                </div>
            </div>
            <div class="col-md-8 border-right">
               
                    <div class="row">
                        <input type="number" value="<? $user['id'];?>" hidden>
                        <div class="mt-2">
                            <div class="col-md-12"><label class="col-form-label">Nama Lengkap</label><input required
                                    type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap"
                                    value=""></div>
                        </div>
                        <div class="col-md-12"><label class="col-form-label">Email</label><input required
                                    type="text" class="form-control" name="email" id="email" placeholder="Email"
                                    value="<?= $user['email']; ?>" readonly></div>
                        </div>
                        
                        
                        <label for="inputName" class="col-md-12 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-12">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
                                <option value="Laki Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-12"><label class="col-form-label">NIS</label><input type="number"
                                class="form-control" placeholder="NIS" value="" name="nis" id="nis"></div>
                        <div class="col-md-12"><label class="col-form-label">Nama Sekolah</label><input required
                                type="text" class="form-control" placeholder="Nama Sekolah" value="" name="nama_sekolah"
                                id="nama_sekolah"></div>
                        <div class="col-md-12"><label class="col-form-label">Alamat Sekolah</label><input required
                                type="text" class="form-control" placeholder="Alamat Sekolah" value="" name="alamat_sekolah"
                                id="alamat_sekolah"></div>
                        <div class="col-md-12"><label class="col-form-label">Tanggal Lahir</label><input required
                                type="date" class="form-control" placeholder="Tanggal Lahir" value="" name="tgl_lahir"
                                id="tgl_lahir"></div>
                        <div class="col-md-12"><label for="inputName" class="col-4 col-form-label">Jurusan</label>
            <div class="col-md-12">
                <select name="jurusan" id="jurusan" class="form-control form-control-user">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="MultiMedia">Multimedia</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="MultiMedia">Multimedia</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="MultiMedia">Multimedia</option>
                </select>
            </div></div>
                        <div class="col-md-12"><label class="col-form-label">Nomor Pembimbing</label><input required
                                type="number" class="form-control" placeholder="Nomor Pembimbing" value="" name="no_pembimbing"
                                id="no_pembimbing"></div>
                    </div>
    <div class="col-md-3"></div>
                    <div class="col-md-8 mt-3"><button class="btn btn-primary profile-button" type="submit">Save
                            Profile</button></div>
            </div>
        </div>
        </form>
        <?php endif; ?>
</div>