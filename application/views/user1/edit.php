<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Multiple Data
                </div>
                <form method="post" action="<?= base_url('multiple/approval/'.$get_id) ?>">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Kode Area</th>
                                <th>Status</th>
                                <th>Approval</th>
                            </tr>
                            <?php 
                                $i=1;
                                foreach ($kode_area as $row) { ?>
                                <input type="hidden" name="kode[<?= $i ?>]" value="<?= $row->kode ?>">
                                    <tr>
                                        <td><?= $row->kode ?></td>
                                        <td>
                                            <?php 
                                                if($row->status == 0)
                                                {
                                                    ?>
                                                        <span class="badge badge-warning">Pending</span>
                                                    <?php
                                                }
                                                else
                                                {
                                                   echo $row->status == 1 ? '<span class="badge badge-success">Diterima</span>' : '<span class="badge badge-danger">Ditolak</span>';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <label>
                                                <input type="radio" name="status[<?= $i ?>]" value="1" required> Diterima
                                            </label>
                                            <label>
                                                <input type="radio" name="status[<?= $i ?>]" value="2" required> Ditolak
                                            </label>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            ?>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?= base_url('multiple') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Approval</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>