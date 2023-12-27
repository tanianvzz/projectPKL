<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/logo1.png'); ?>" class="w-25 rounded-circle ">
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(' /registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>