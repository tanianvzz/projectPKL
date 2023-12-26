    <div class="container-fluid">
        <?php if (!empty($company)): ?>
        <section style="background-color: #eee;">
            <div class="container py-5">
                <h1 class="text-center ">Profile Perusahaan</h1>
                <center>
                    <hr class="w-25">
                </center>
                <div class="row m-3">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="<?= base_url('assets/img/profile/default.jpg') . $company['logo_path']; ?>"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3"><?= $company['name']; ?></h5>
                                <p class="text-muted mb-1">Bidang <?= $company['major'];?></p>
                                <p class="text-muted mb-4"><?= $company['address'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Perusahaan</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $company['name']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $company['email']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telepon</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $company['phone']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Alamat</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $company['address']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Jenis Bidang</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $company['major']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center mb-2 m-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Edit
                                </button>
                                <a class="btn btn-danger ms-1"
                                    href="<?php echo base_url() ?>perusahaan/hapus/<?=$company['id']; ?>"><i
                                        class="fas fa-fw fa-trash"></i></a>
                        </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit data perusahaan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="<?= base_url().'perusahaan/update'?>" method="post">
                                                    <input name="id" value="<?php echo $company['id'];?>" hidden>

                                                    <div class="for-group mb-3">
                                                        <label>Nama Barang</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="<?= $company['name']?>">
                                                    </div>
                                                    <div class="for-group mb-3">
                                                        <label>Deskripsi</label>
                                                        <input type="text" name="description" class="form-control"
                                                            value="<?= $company['description']?>">
                                                    </div>
                                                    <div class="for-group mb-3">
                                                        <label>Alamat</label>
                                                        <input type="text" name="address" class="form-control"
                                                            value="<?= $company['address']?>">
                                                    </div>
                                                    <div class="for-group mb-3">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control"
                                                            value="<?= $company['phone']?>">
                                                    </div>
                                                    <div class="for-group mb-3">
                                                        <label>Jurusan</label>
                                                        <input type="text" name="major" class="form-control"
                                                            value="<?= $company['major']?>">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>