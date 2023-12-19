<div class="container-fluid">
    <div class="row">
        <div class="container-fluid ">
            <form method="post" action="<?= base_url(). 'Perusahaan/tambah_data';?>" enctype="multipart/form-data"
                class=" text-light rounded m-5 bg-success">
                <h3 class="text-center pt-5">ISI FORM DIBAWAH INI!!</h3>
                <center>
                    <hr class="w-25 ">
                </center>
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
                    <input type="text" class="form-control mb-3 mt-2" name="email" required="" placeholder="email">
                </div>
                <div class="form-group mb-3 m-3">
                    <strong>Jenis bidang :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="major" required="" placeholder="jenis bidang">
                </div>
                <button type="submit" class="btn btn-dark m-4">tambah data</button>
            </form>
        </div>

    </div>
</div>