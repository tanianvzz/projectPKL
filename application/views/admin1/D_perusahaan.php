
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
                                            aria-label="Name: activate to sort column descending">idtempat</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 192px;"
                                            aria-label="Position: activate to sort column ascending">alamat tempat</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 90px;"
                                            aria-label="Office: activate to sort column ascending">
                                           nama tempat</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">deskripsi</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Jurusan</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">gambar</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">no telp</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
								                	$no = 1;
                                    if (!empty($perusahaan)) {
                                        // echo "Tidak ada data";
                                    // }else {
                                        foreach ($perusahaan as $pt) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                
                                                <td><?= $pt->alamat_tempat ?></td>
                                                <td><?= $pt->nama_tempat ?></td>
                                                <td><?= $pt->deskripsi ?></td>
                                                <td><?= $pt->Jurusan ?></td>
                                                <td><?= $pt->gambar ?></td>
                                                <td><?= $pt->no_telp ?></td>
                                                <td>
                                                    <a class="btn btn-danger"
                                                        href="<?php echo base_url() ?>admin/admin/hapus_pt/<?= $pt->id_tempat ?>">hapus</a>
                                                    
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