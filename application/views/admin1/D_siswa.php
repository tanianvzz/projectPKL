
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
                                    <tr class="text text-center">
                                        <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 90px ;" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Id siswa</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 192px;"
                                            aria-label="Position: activate to sort column ascending">Nama siswa</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 90px;"
                                            aria-label="Office: activate to sort column ascending">
                                         Email</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Gambar</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Role</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Active</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Date_createds</th>
                                        <th class="dt-body-right sorting" tabindex="0" rowspan="1" colspan="1"
                                            style="width: 35px;">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
								                	$no = 1;
                                    if (!empty($siswa)) {
                                        // echo "Tidak ada data";
                                    // }else {
                                        foreach ($siswa as $ass) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                
                                               
                                                <td><?= $ass->name ?></td>
                                                <td><?= $ass->email ?></td>
                                                <td><?= $ass->image ?></td>
                                                <td><?= $ass->role_id ?></td>
                                                <td><?= $ass->is_active ?></td>
                                                <td><?= $ass->date_created ?></td>
                                                <td>
                                                    <a class="btn btn-danger"
                                                        href="<?php echo base_url() ?>admin/admin/hapus_ass/<?= $ass->id ?>">hapus</a>
                                                   
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