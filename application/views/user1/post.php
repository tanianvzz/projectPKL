<div class="container-fluid ">
    <center>
        <form method="post" action="<?= base_url(). 'Post/tambah_post';?>" enctype="multipart/form-data"
        class=" text-light rounded m-5 bg-dark w-75" >
        <h2 class="m-4 pt-4 text-center">Tambah Post Perusahaan</h2><hr>
        <div class="row">
            <div class="col">
                <div class="form-group mb-3 m-3">
                    <strong class=" d-flex justify-content-start">Nama Persusahaan :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="nama_tempat" required=""
                        placeholder="nama perusahaan">
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-3 m-3">
                    <strong class=" d-flex justify-content-start">Alamat Persusahaan :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="alamat_tempat" required=""
                        placeholder="alamat perusahaan">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group mb-3 m-3">
                    <strong class=" d-flex justify-content-start">No Telp :</strong>
                    <input type="text"  class="form-control mb-3 mt-2"  name="no_telp" placeholder="Nomor Telepon" required>

                </div>
            </div>
            <div class="col">
                <div class="form-group mb-3 m-3">
                    <strong class=" d-flex justify-content-start">Jurusan :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="jurusan" required="" placeholder="Jurusan">
                </div>
            </div>
        </div>
        <div class="form-group mb-3 m-3 ">
            <strong class=" d-flex justify-content-start">Deskripsi :</strong>
            <textarea type="text" class="form-control mb-3 mt-2" name="deskripsi" required=""
                placeholder="deskripsi"></textarea>
        </div>

        <div class="form-group mt-5 m-3 d-flex justify-content-start">
            <strong class=" d-flex justify-content-start ">Gambar</strong><br>
            <input class="form-control w-25 ms-3" type="file" id="formFileMultiple" name="gambar"
                class="btn btn-light" required="">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-light m-3 "><strong>tambah data</strong></button>
        </div>
    </form>
    </center>
</div>
