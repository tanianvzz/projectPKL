<header>
        <!-- place navbar here -->
        <div class="">
        <nav class="navbar navbar-expand navbar-light bg">
             
                    <ul class="navbar-nav me-auto mt-1 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Data Siswa</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="">Jurusan</a>
                            <a class="dropdown-item" href="#">Keterangan</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Data Perusahaan</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Orang Perusahaan</a>
                            <a class="dropdown-item" href="#">Alamat Perusahaan</a>
                        </div>
                    </li>
                   
                </ul>
                <form class="d-flex my-2 my-lg-0 m-5">
                    <button class="btn btn-outline-primary m-2 my-2 my-sm-0" type="submit">Login</button>
                    <a href="<?=base_url('auth/logout'); ?>"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Back To Home</button></a>
                </form>
            </div>
        </nav>
    </header>