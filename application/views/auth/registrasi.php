<?php  ?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?= base_url('auth/registrasi') ?>" method="post">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" autofocus value="<?= set_value('nama') ?>">
                    <?= form_error('nama','<small class="taxt-form text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" value="<?= set_value('email') ?>">
                  <?= form_error('email','<small class="taxt-form text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group">
                  <input type="text" name="no_hp" class="form-control form-control-user" placeholder="No Handphone" value="<?= set_value('no_hp') ?>">
                  <?= form_error('no_hp','<small class="text-danger">','</small>') ?>
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" rows="2" placeholder="Alamat" name="alamat"><?= set_value('alamat') ?></textarea>
                  <?= form_error('alamat','<small class="text-danger">','</small>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    <?= form_error('password1','<small class="taxt-form text-danger pl-3">','</small>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                    <?= form_error('password2','<small class="taxt-form text-danger pl-3">','</small>') ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary btn-user btn-block">Register Acount</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small text-primary" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small text-primary" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
