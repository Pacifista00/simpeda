<section style="background:linear-gradient(60deg, black,#3D1766, #3D1766);">
  <div class="container position-relative py-5" style="min-height:100vh;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?= base_url('assets/icons/Saly-26.png'); ?>" alt="login form" class="img-fluid mt-5 ps-5" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="<?= base_url('auth/register'); ?>">

                  <div class="d-flex align-items-center mb-1 pb-1">
                    <span class="h1 fw-bold mb-0">Simpeda</span>
                  </div>

                  <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;">Buat akun anda</h5>

                  <div class="form-outline">
                    <input type="text" id="username" name="username" value="<?= set_value('username'); ?>" class="form-control form-control-md" />
                    <label class="form-label" for="username">Username</label>
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                  </div>

                  <div class="form-outline">
                    <input type="text" id="Email" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-md" />
                    <label class="form-label" for="Email">Email</label>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                  </div>

                  <div class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control-md" />
                    <label class="form-label" for="password">Password</label>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                  </div>

                  <div class="form-outline">
                    <input type="password" id="passwordconfirm" name="passwordconfirm" class="form-control form-control-md" />
                    <label class="form-label" for="passwordconfirm">Confirm Password</label>
                  </div>

                  <div class="pt-1 mb-1">
                    <button type="submit" class="btn btn-primary tombol btn-lg mx-auto" type="button">Register</button>
                  </div>

                  <p class="mb-2 pb-lg-2" style="color: #393f81;">Sudah mendaftar? <a href="<?= base_url('auth'); ?>" style="color: #393f81;">Login disini</a></p>
                  <p class="pb-lg-2" style="color: #393f81;"><a href="<?= base_url('home'); ?>" style="color: #393f81;">Ke Halaman Home</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>