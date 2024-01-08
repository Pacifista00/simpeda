<div class="main-container d-flex">
    <div class="sidebar hide m-0 text-white-50 mx-auto d-flex">
        <a class="text-decoration-none" href="<?= base_url('home'); ?>">
            <h1 class="kincup hide fs-2 text-center mt-3 mb-5">Simpeda</h1>
        </a>
        <div id="menu-button">
            <input type="checkbox" id="hamburger">
            <label for="hamburger" id="hamburger-icon">
                <div for="hamburger-icon" class="fa fa-bars"></div>
            </label>
        </div>
        <div class="profile mx-auto">
            <img class="kincup hide rounded-circle" style="width:150px; height:150px; object-fit:cover;" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Avatar">
            <a class="text-decoration-none text-center" href="#">
                <p class="fs-5 mt-2 mb-4 text-white">
                    <?= $user['username'] ?>
                </p>
            </a>
        </div>
        <ul class="sidebar-list list-unstyled m-3">
            <li class="active"><a href="<?= base_url('edit'); ?>" class="text-decoration-none mt-1 text-white-50 d-block">Edit Profile</a></li>
            <li class=""><a href="<?= base_url('dashboard'); ?>" class="text-decoration-none mt-1 text-white-50 d-block">Dashboard</a></li>
            <li class=""><a href="<?= base_url('history'); ?>" class="text-decoration-none mt-1 text-white-50 d-block">Riwayat</a></li>
            <li class=""><a href="<?= base_url('about'); ?>" class="text-decoration-none mt-1 text-white-50 d-block">About</a></li>
        </ul>
        <ul class="sidebar-logout list-unstyled m-3">
            <li><a class="text-decoration-none text-light" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    <!-- sidebar end -->
    <main class="main-content hide" style="background-color:#EEEEEE;">
        <div style="min-height:100vh;">
        <div class="smoke hide"></div>
        <div class="heading p-3">
            <div class="container-md">
                <div class="title text-white text-end pb-1">Sistem Manajemen Stasiun Pengisian Daya</div>
            </div>
        </div>