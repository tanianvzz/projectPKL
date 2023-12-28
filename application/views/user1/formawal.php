        <div class="container-fluid ">
            <form method="post" action="<?= base_url(). 'Perusahaan/tambah_data';?>" enctype="multipart/form-data"
                class=" text-light rounded m-5 bg-secondary">
                <h3 class="text-center pt-3">ISI FORM DATA PROFILE PERUSAHAAN</h3>
                <center>
                    <hr>
                </center>
                <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">

                <div class="form-group mb-3 m-3">
                    <strong>Nama Persusahaan :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="name" required=""
                    placeholder="nama perusahaan">
                </div>
                <div class="form-group mb-3 m-3">
                    <strong>Deskripsi :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="description" required=""
                    placeholder="deskripsi">
                </div>
                <div class="form-group mb-3 m-3">
                    <strong>Alamat :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="address" required="" placeholder="alamat">
                </div>
                <div class="form-group mb-3 m-3">
                    <strong>Telepon :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="phone" required="" placeholder="telepon">
                </div>
                <div class="form-group mb-3 m-3">
                    <strong>Email :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="email" required="" placeholder="email" value="<?= $company['email'];?>" readonly>
                </div>
               <div class="form-group mb-3 m-3">
                    <strong>Jenis bidang :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="major" required=""
                        placeholder="jenis bidang">
                </div>
                <button type="submit" class="btn btn-primary m-4">tambah data</button>
            </form>
        </div>