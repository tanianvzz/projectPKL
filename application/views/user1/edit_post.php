<div class="container-fluid">
    <?php foreach($tempat as $t) : ?>
        <h5 class="d-flex justify-content-center"><i class="fas fa-edit"></i>Edit Data Barang</h5>
<center>
        <form action="<?= base_url().'Beranda/update'?>" method="post" class=" w-50 ms-5">
        <input  name="id_tempat" value="<?php echo $t['id_tempat'];?>" hidden>

        <div class="form-group mb-3">
            <label class="mb-2 text-primary d-flex justify-content-start">Nama tempat</label>
            <input type="text" name="nama_tempat" class="form-control" value="<?= $t['nama_tempat']?>">
        </div>
        <div class="form-group mb-3">
        <label class="mb-2 text-primary d-flex justify-content-start">Alamat tempat</label>
            <input type="text" name="alamat_tempat" class="form-control" value="<?= $t['alamat_tempat']?>">
        </div>
        <div class="form-group mb-3">
            <label  class="mb-2 text-primary d-flex justify-content-start">jurusan</label>
            <input type="text" name="Jurusan" class="form-control" value="<?= $t['Jurusan']?>">
        </div>
        <button type="submit" class="btn btn-primary d-flex justify-content-end">save</button>
        </form>
     <?php  endforeach; ?>
     </center>  
</div>