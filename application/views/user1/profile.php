<div class="container-fluid">

    <section>
        <div class="container py-5">
            <?php foreach($company1 as $c1) : ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?= base_url('asset/img/profile/default.png') ?>" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?= $c1['name']; ?></h5>
                            <p class="text-muted mb-1"><?= $c1['email']; ?></p>
                            <p class="card-text"><small class="text-body-secondary">member since
                                    <?= date('d-m-Y', $c1['date_created']); ?></small></p>
                            <div class="d-flex justify-content-center mb-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    add profile data
                                </button>
                            </div>

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
                                            <form method="post" action="<?= base_url(). 'Perusahaan/tambah_data';?>">
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
                    <?php endforeach;?>

                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <h4 class="d-flex justify-content-center m-3 "><strong>Postingan</strong></h4>
                            <hr>
                            <ul class="list-group list-group-flush rounded-3">
                                <?php foreach ($tempat as $tmpt) : ?>
                                <div class="card m-5 bg-light text-dark" style="">
                                    <div class="card-body ">
                                        <h5 class="card-title text-center"><strong><?= $tmpt['nama_tempat']; ?></strong>
                                        </h5>
                                        <hr>
                                        <p class="card-title mb-4 d-flex justify-content-center "><small>Alamat berada
                                                di
                                                <?= $tmpt['alamat_tempat']; ?><br>Untuk jurusan
                                                <?= $tmpt['Jurusan']; ?></small></p>
                                        <img src="<?= base_url().'/uploads/' .$tmpt['gambar'];?>"
                                            class="w-75 ms-3 rounded">
                                        <a href="<?= base_url('Beranda/edit/'). $tmpt['id_tempat']; ?>"
                                            class="btn btn-outline-primary mt-4">Edit</a>
                                        <a href="<?= base_url('Beranda/hapus/'). $tmpt['id_tempat']; ?>"
                                            class="btn btn-danger mt-4">Hapus</a>
                                    </div>

                                </div>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <?php if (!empty($company2)): ?>
                            <div class="row">
                                <p hidden><?= $company2['user_id']?></p>
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Perusahaan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $company2['name']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat Perusahaan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $company2['address']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Telepon</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $company2['phone']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis bidang</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $company2['major']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">deskripsi</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $company2['description']?></p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="alert alert-warning" role="alert">
                            Harap tambahkan data perusahaan terlebih dahulu.
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4 text-center"><span
                                            class="text-primary font-italic me-1">Approve</span> Peserta
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>