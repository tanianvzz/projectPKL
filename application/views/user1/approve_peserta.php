<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <center><strong class="mb-3">Pengajuan peserta </strong></center>
                <form method="post" action="<?= base_url('multiple/Persetujuan/') ?>">
                    <div class="card-bod text-center mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th> <strong>Data Member</strong></th>
                                <th> <strong>Status</strong></th>
                                <th> <strong>Persetujuan</strong></th>
                            </tr>
                            <?php 
                                $i=1;
                                foreach ($kode_area as $row) { ?>
                                <input type="hidden" name="kode[<?= $i ?>]" value="<?= $row->kode ?>">
                                    <tr>
                                        <td><?= $row->id ?></td>
                                        <td>
                                            <?php 
                                                if($row->status == 0)
                                                {
                                                    ?>
                                                    <span class="badge bg-warning">Pending</span>
                                                    <?php
                                                }
                                                else
                                                {
                                                   echo $row->status == 1 ? '<span class="badge bg-success">Diterima</span>' : '<span class="badge bg-danger">Ditolak</span>';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <label>
                                                <input type="radio" name="status[<?= $i ?>]" value="1" required> Diterima
                                            </label>
                                            <label>
                                                <input type="radio" name="status[<?= $i ?>]" value="2"> Ditolak
                                            </label>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            ?>
                        </table>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>