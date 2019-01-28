<?php
require 'login.php';
require_once('shared/header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <?php if ($login_err) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?=$login_err?>
                            </div>
                        <?php endif; ?>
                        <?php if ($password_err) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?=$password_err?>
                            </div>
                        <?php endif; ?>
                        <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-label-group">
                                <input type="email" id="login" name="login" class="form-control" placeholder="Email address" required value="<?= $login; ?>">
                                <label for="login">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('shared/footer.php');