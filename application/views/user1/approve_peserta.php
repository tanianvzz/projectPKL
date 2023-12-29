<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Multiple Users
                </div>
                <div class="col-md-12">
                    <?php
                        $pesan = $this->session->flashdata('pesan');
                        if($pesan)
                        {
                            ?>
                    <div class="alert alert-success">
                        <?= $pesan ?>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <?php if (!empty($user)): ?>
                            <tr class="text-center">
                            <td><?= $user['name']?></td>
                            <td>
                                <a href="<?= base_url('multiple/edit/'). $user['id'] ?>"
                                    class="btn btn-success btn-sm">Approval</a>
                            </td>

                        </tr>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="card-footer">
                    Page
                </div>
            </div>
        </div>
    </div>
</div>