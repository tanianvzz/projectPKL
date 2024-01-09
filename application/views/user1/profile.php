<div class="container-fluid">

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                        <?php foreach ($users as $user): ?>
    <img src="<?= base_url('asset/img/profile/default.png') ?>" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?= $user->name ?></h5>
                            <p class="text-muted mb-1"><?= $user->email ?></p>
                            <p class="card-text"><small class="text-body-secondary">member since
                                    <?= date('d-m-Y', $user->date_created); ?></small></p>
                            <div class="d-flex justify-content-center mb-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    add profile data
                                </button>
                            </div>
<?php endforeach; ?>
                            

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Masukan data profile
                                                perusahaan anda dibawah ini !!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?= base_url(). 'Profile/tambah_aksi';?>">
                                                <div class="form-group mb-2">
                                                    <label class="d-flex justify-content-start mb-2">Nama perusahaan
                                                    </label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="formGroupExampleInput"
                                                        placeholder="masukan nama Perusahaan">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="d-flex justify-content-start mb-2">Alamat perusahaan
                                                    </label>
                                                    <input type="text" name="address" class="form-control"
                                                        id="formGroupExampleInput"
                                                        placeholder="masukan alamat Perusahaan">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="d-flex justify-content-start mb-2">Telepon </label>
                                                    <input type="text" name="phone" class="form-control"
                                                        id="formGroupExampleInput"
                                                        placeholder="masukan telepon perusahaan">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="d-flex justify-content-start mb-2">Jenis bidang
                                                    </label>
                                                    <input type="text" name="major" class="form-control"
                                                        id="formGroupExampleInput" placeholder="masukan jenis bidang">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="d-flex justify-content-start mb-2">Deskripsi </label>
                                                    <textarea name="description" class="form-control"
                                                        id="formGroupExampleInput"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary m-4">tambah data</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body ">
                            <?php if (!empty($profiles)): ?>
                            <div class="row">
                                <p hidden name="id_user"><?= $profiles['id_user']?></p>
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Perusahaan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $profiles['name']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat Perusahaan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $profiles['address']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Telepon</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $profiles['phone']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis bidang</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $profiles['major']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">deskripsi</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $profiles['description']?></p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="alert alert-warning" role="alert">
                            Harap tambahkan data perusahaan terlebih dahulu.
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body p-0">
                                <div class="card-header mb-4 bg-light">
                                    <h4 class="d-flex justify-content-center m-3 "><strong>Postingan</strong></h4>
                                </div>
                                <ul class="rounded-3 ">
                                    <?php foreach ($tempat as $tmpt) : ?>
                                    <div class="card m-2 bg-light text-dark w-50" style="">
                                        <div class="card-body mb-4   ">
                                            <h5 class="card-title text-center">
                                                <strong><?= $tmpt['nama_tempat']; ?></strong>
                                            </h5>
                                            <hr>
                                            <p class="card-title mb-4 d-flex justify-content-center "><small>Alamat
                                                    berada
                                                    di
                                                    <?= $tmpt['alamat_tempat']; ?><br>Untuk jurusan
                                                    <?= $tmpt['Jurusan']; ?></small></p>
                                                    <img src="<?= base_url().'/uploads/' .$tmpt['gambar'];?>"  style="width:300px; height:300px;" class="rounded-4">
                                            <div class="d-flex justify-content-center">

                                                <a href="<?= base_url('Beranda/detail/'). $tmpt['id_tempat']; ?>" class="btn btn-secondary mt-4 ml-4">Detail</a>
    
                                                <a href="<?= base_url('Beranda/edit/'). $tmpt['id_tempat']; ?>"
                                                    class="btn btn-primary mt-4">Edit</a>
                                                <a href="<?= base_url('Beranda/hapus/'). $tmpt['id_tempat']; ?>"
                                                    class="btn btn-danger mt-4">Hapus</a>
                                            </div>
                                        </div>

                                    </div>

                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>