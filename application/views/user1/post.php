<div class="container-fluid ">
    <form method="post" action="<?= base_url(). 'Post/tambah_post';?>" enctype="multipart/form-data"
        class=" text-light rounded m-5 bg-dark">
        <div class="form-header bg-secondary rounded text-dark">
            <h3 class="text-center pt-3">ISI FORM DIBAWAH INI!!</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group mb-3 m-3">
                    <strong>Nama Persusahaan :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="nama_tempat" required=""
                        placeholder="nama perusahaan">
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-3 m-3">
                    <strong>Alamat Persusahaan :</strong>
                    <input type="text" class="form-control mb-3 mt-2" name="alamat_tempat" required=""
                        placeholder="alamat perusahaan">
                </div>
            </div>
        </div>
        <div class="form-group mb-3 m-3">
            <strong>No.Telp :</strong>
            <input type="text" class="form-control mb-3 mt-2" name="no_telp" required="" placeholder="no_telp">
        </div>
        <div class="form-group mb-3 m-3">
            <strong>Jurusan :</strong>
            <select class="form-control mb-3" name="jurusan" placeholder="jurusan">
                <la>-- Jurusan --</option>
                    <option>MultiMedia</option>
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Tata Boga</option>
                    <option>Kecantikan</option>
                    <option>TKJ</option>
                    <option>Akutansi</option>
                    <option>Perhotelan</option>
            </select>
        </div>
        <div class="form-group mb-3 m-3">
            <strong>Deskripsi :</strong>
            <input type="text" class="form-control mb-3 mt-2" name="deskripsi" required="" placeholder="deskripsi">
        </div>

        <div class="form-group mb-2 m-3">
            <strong>Gambar</strong><br>
            <input class="form-control w-25" type="file" id="formFileMultiple" multiple name="gambar" class="btn btn-light" required="">
        </div>
        <button type="submit" class="btn btn-secondary m-4 text-dark"><strong>tambah data</strong></button>
    </form>

</div>