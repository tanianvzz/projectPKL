<!-- Begin Page Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 justify-content-x">

        </div>
    </div>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('asset/img/profile/default.png') ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title mt-5">
                        <h1>
                            <?= $user['name']; ?>
                        </h1>
                    </h5>
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            <?php ?>
                        </h5><br>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-venus-mars"></i></div>
                    <div class="col-md-10">
                        <? ?>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-school"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-pen"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <?= $user['email']; ?>
                    <h5></h5>
                    </p>

                </div>
                <div class="btn btn-info m-3 my-3">
                    <a href="<?= base_url('member/ubahprofil'); ?>" class="text text-white">
                        <i class="fas fa-user-edit"></i> Ubah Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <center>
        <h2 class="m-3">SILAHKAN ISI DATA BERIKUT</h2>
    </center>
    <form action="<?= base_url('datauser2/update_profil2') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input required type="text" class="form-control" name="name" id="name" placeholder="Name"
                    value=" <?= $user['name']; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input required type="email" class="form-control" name="email" id="email" placeholder="Email"
                    value="<?= $user['email'] ?>" readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
                    <option value="Laki Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Nama Sekolah</label>
            <div class="col-8">
                <input required type="text" class="form-control" name="nama_sekolah" id="alamat_sekolah"
                    placeholder="Nama Sekolah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Alamat Sekolah</label>
            <div class="col-8">
                <input required type="text" class="form-control" name="alamat_sekolah" id="alamat_sekolah"
                    placeholder="Alamat sekolah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">NIS</label>
            <div class="col-8">
                <input required type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input required type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Jurusan</label>
            <div class="col-8">
                <select name="jurusan" id="jurusan" class="form-control form-control-user">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="MultiMedia">Multimedia</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Nomor Pembimbing</label>
            <div class="col-8">
                <input required type="text" class="form-control" name="no_pembimbing" id="inputName"
                    placeholder="No. Handphone">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>

<!-- /.container-fluid -->
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="<?= base_url('asset/img/profile/default.png') ?>"><span
                class="font-weight-bold"><?= $user['name'];?></span><span class="text-black-50"><?= $user['email'];?></span><span>
                </span>
            <span> <div class="btn btn-info m-3 my-3">
                    <a href="<?= base_url('member/ubahprofil'); ?>" class="text text-white">
                        <i class="fas fa-user-edit"></i> Ubah Profil</a>
                </div></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Nama Lengkap</label><input type="text"
                            class="form-control" placeholder="first name" value=""></div>
                </div>
                <div class="row">
                    <label for="inputName" class="col-md-12 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-12">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
                            <option value="Laki Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-12"><label class="labels">Nama Sekolah</label><input type="text"
                            class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Alamat Sekolah</label><input type="text"
                            class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">NIS</label><input type="text" class="form-control"
                            placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label><input type="text"
                            class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Jurusan</label><input type="text" class="form-control"
                            placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Nomor Pembimbing</label><input type="text"
                            class="form-control" placeholder="enter email id" value=""></div>
                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                        Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>