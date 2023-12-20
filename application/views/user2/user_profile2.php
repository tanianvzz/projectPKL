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
                            <!-- <?= $user['name']; ?> -->
                        </h1>
                    </h5>
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5><?php if(!empty($this->db->get('user'))){
                            echo "-----------";
                        }?></h5><br>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-venus-mars"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-school"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-pen"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <!-- <?= $user['email']; ?> -->
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
        <center><h2 class="m-3">SILAHKAN ISI DATA BERIKUT</h2></center>
        <form action="<?= base_url('datauser2/update_profil2')?>"  method="POST" enctype="multipart/form-data">
        <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <select name="jurusan" id="jurusan"class="form-control form-control-user">
                        <option value="rpl">Laki-Laki</option>
                        <option value="mm">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Alamat Sekolah</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Alamat sekolah">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">NIS</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="NIS">
                </div>
            </div> 
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="inputName" id="inputName" placeholder="NIS">
                </div>
            </div> 
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Jurusan</label>
                <div class="col-8">
                    <select name="jurusan" id="jurusan"class="form-control form-control-user">
                        <option value="rpl">Rekayasa Perangkat Lunak</option>
                        <option value="mm">Multimedia</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Nomor Pembimbing</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="No. Handphone">
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