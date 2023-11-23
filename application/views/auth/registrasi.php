<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" value="<?= set_value('nama'); ?>" type="text" name="nama" placeholder="Enter your first name" />
                                                <label for="inputFirstName">Full Name</label>
                                            </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" value="<?= set_value('email'); ?>" type="email" name="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" value="<?= set_value('password'); ?>" type="password" name="password" placeholder="Create a password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" value="<?= set_value('password2'); ?>" type="password2" n placeholder="Confirm password" />
                                                <label for="inputPasswordConfirm">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="<?= base_url('auth/index'); ?>">Create Account</button></div>
                                    </div>
                                </form class="user" method="POST" action="<?= base_url('auth/cek_regis'); ?>">
                            </div>
                            <div class="card-footer text-center py-3">
                                <a class="small" href="<?=base_url('Auth');?>">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </body>

    </html>

    