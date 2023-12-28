<nav class="navbar navbar-expand-lg navbar-light bg-light m-4 rounded">
    <div class="container-fluid ms-4">
        <a class="navbar-brand"><strong>U.Find</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('Beranda'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Post'); ?>">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Profile'); ?>">My Profile</a>
                </li>
            </ul>
            <i class="fa-solid fa-right-from-bracket mt-1 p-1"></i>
            <a class="nav-link " href="<?= base_url('Auth/logout')?>">Logout</a>
        </div>
    </div>
</nav>