<!doctype html>
<html lang="en">

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

</head>


<body>


<!-- Begin Page Content -->
<div class="container-fluid">
        <div class="card-body">
            <div class="grid">
                <div class="col-md-12">
                    <div class="hero-callout">
                        <table></table>
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display nowrap dataTable dtr-inline collapsed"
                                style="width: 100%;" aria-describedby="example_info">
                                <thead>
                                    <tr class="text-center">
                                        <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 90px ;" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">id siswa</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 192px;"
                                            aria-label="Position: activate to sort column ascending">nama siswa</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 90px;"
                                            aria-label="Office: activate to sort column ascending">
                                           email</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 90px;"
                                            aria-label="Office: activate to sort column ascending">
                                           image</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">jenis kelamin</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">nama sekola</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">alamat sekola</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Nis</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">tgl lahir</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Jurusan</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">No pembimbing</th>
                                       
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
								                	$no = 1;
                                    if (!empty($profil)) {
                                        // echo "Tidak ada data";
                                    // }else {
                                        foreach ($profil as $pr) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                
                                                <td><?= $pr->name?></td>
                                                <td><?= $pr->email ?></td>
                                                <td><?= $pr->image ?></td>
                                                <td><?= $pr->jenis_kelamin ?></td>
                                                <td><?= $pr->nama_sekolah?></td>
                                                <td><?= $pr->alamat_sekolah ?></td>
                                                <td><?= $pr->nis ?></td>
                                                <td><?= $pr->tgl_lahir ?></td>
                                                <td><?= $pr->jurusan ?></td>
                                                <td><?= $pr->no_pembimbing ?></td>
                                                <td>
                                                    <a class="btn btn-danger"
                                                        href="<?php echo base_url() ?>admin/admin/hapus_pr/<?= $pr->id_user ?>">hapus</a>
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach; 
                                    } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->