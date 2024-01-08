<div class="container">
  <div class="card p-5 mx-2 my-3 bg-light" >
    <div class="row">

      <!-- edit form column -->
      <div class="col-md-12 personal-info" >
        <h3>Personal info</h3>

        <form class="form-horizontal " role="form" method="post" enctype="multipart/form-data" action="<?= base_url('edit'); ?>">
          <p class="text-muted"><small>Akun terdaftar pada <?= date('d F Y',  $user['date_created']); ?></small></p>
          <?= $this->session->flashdata('messageedit'); ?>
          <div class="row">
            <div class="col-md-4 mx-auto text-center">
              <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="width:300px; height:250px; object-fit:cover;">
              <h6>Upload a different photo...</h6>

              <input type="file" class=" form-control" id="foto" name="foto">
              <small class="text-muted">Pastikan ukuran file dibawah 2mb</small>
            </div>
            <div class="form-group col-md-6 mx-auto">
              <input type="hidden" name="id" value="<?= $user['id']; ?>">
              <label class="control-label">Username:</label>
              <?= form_error('username', '<small class="text-danger">', '</small>'); ?>

              <input class="form-control" type="text" name="username" value="<?= $user['username']; ?>">

              <label class="control-label">Email:</label>
              <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

              <input class="form-control" type="text" name="email" value="<?= $user['email']; ?>">

            </div>
          </div>
          <button type="submit" class="btn tombol mt-3 text-white">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<hr>