<!-- Begin Page Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 justify-content-x">

        </div>
    </div>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('asset/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title mt-5">
                        <h1>
                            <?= $user['name']; ?>
                        </h1>
                    </h5>
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            <?php ?>
                        </h5><br>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-venus-mars"></i></div>
                    <div class="col-md-10">
                        <? ?>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-school"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <div class="col-md-2 mt-1   "><i class="fa-solid fa-pen"></i></div>
                    <div class="col-md-10">
                        <?php ?>
                    </div>
                    <?= $user['email']; ?>
                    <h5></h5>
                    </p>

                </div>
                <div class="btn btn-info m-3 my-3">
                    <a href="<?= base_url() ?>datauser2/<?php echo $user['id']; ?>" class="text text-white">
                        <i class="fas fa-user-edit"></i> Ubah Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->