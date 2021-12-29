<?php  ?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOGIN SNACKHAI</h1>

                    <?= $this->session->flashdata('user'); ?>

                    <hr>
                  </div>
                  <form action="" method="post" class="user">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Email">
                      <?= form_error('email','<small class="text-form text-danger pl-3">','</small>') ?>
                    </div>
                    <div class="form-group">
                      <div class="input-container">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                      <?= form_error('password','<small class="text-form text-danger pl-3">','</small>') ?>
                      <!-- <i id="show-password" class="fa fa-eye"></i> -->
                      </div>
                    </div>
                    <!-- <input type="checkbox" class="form-checkbox pr-3">Lihat Password -->
                                  
                    <button type="submit" class="btn btn-sm btn-primary btn-user btn-block">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small text-primary" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small text-primary" href="<?= base_url('auth/registrasi') ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>