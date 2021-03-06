<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <?php flash('register_success'); ?>
                <h2>Login</h2>
                <p>Please fill out this form to Login</p>
                <form action="<?php echo URLROOT ?>/users/login" method="post">
                    <div class="form-group">
                      <label for="email">Email <sup>*</sup></label>
                      <input type="email" name="email"  class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['email']; ?>">
                      <small class="invalid-feedback"><?php echo $data['email_err']; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="password">Password<sup>*</sup></label>
                      <input type="text" name="password"  class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['password']; ?>">
                      <small class="invalid-feedback"><?php echo $data['password_err']; ?></small>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>