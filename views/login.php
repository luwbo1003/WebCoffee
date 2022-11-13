<!DOCTYPE html>
<html lang="en">

<?php require_once APPROOT . '/views/includes/head.php'; ?>
<link rel="stylesheet" href="<?= CSSFILE ?>/card_product.css">

<body>
    <!-- header section start -->
    <div class="container-fluid p-0">
        <?php require_once APPROOT . '/views/includes/nav_all.php'; ?>
        <!-- header section end -->
        <div>
        <fieldset class="mx-auto" style="padding: 45px; margin-top: 100px; min-width: 300px;  max-width: 550px;">
            <!-- Message section -->
            <?php if (isset($data['msg'])) : ?>

                <?php switch ($data['msg']):
                    case 'success': ?>

                        <div class="alert alert-dismissible alert-success mb-5" style="font-size: 14px;">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            Bạn đã tạo tài khoản thành công!
                        </div>

                        <?php break; ?>

                    <?php

                    case 'emailexist': ?>

                        <div class="alert alert-dismissible alert-danger mb-5" style="font-size: 14px;">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            Email đã tồn tại vui lòng đăng ký email khác!
                        </div>

                        <?php break; ?>

                    <?php

                    case 'wrongpass': ?>

                        <div class="alert alert-dismissible alert-danger mb-5" style="font-size: 14px;">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            Password không trùng khớp vui lòng đăng ký lại!
                        </div>

                        <?php break; ?>

                <?php endswitch; ?>
            <?php endif; ?>
            <!-- Login form -->
            <form id="login-box" action="<?= URLROOT ?>/User/login" method="POST">

                <legend class="text-center mt-4 mb-3">LOGIN</legend>
                <p style="font-size: 85%; text-align: center;">Don't have an account?
                    <span class="text-link"><a id="signup-btn" class="text-black" style="font-size: 90%;">Sign up
                            here</a></span>.
                </p>

                <div class="needs-validation mt-5">
                    <div class="form-group mb-4" style="font-size: 16px; ">
                        <input class="form-control" type="email" name="emailInput" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-2" style="font-size: 16px;">
                        <input type="password" name="passwordInput" class="form-control" id="password" placeholder="Password" required>

                        <div class="forgot-password" style="text-align: right; padding: 20px ; width: 100%;">
                            <button type="button" class="text-link small">Forgot your password?</button>
                        </div>
                    </div>
                    <div>
                        <input name="signin" class="btn btn-primary w-25" type="submit" value="SIGN IN">
                        <span class="text-link">
                            <a href="#" class="text-black" style=" margin-left: 10px; font-size: 85%;">Return to
                                Store</a>
                        </span>
                    </div>

                </div>
            </form>
            <!-- Login form end -->

            <!-- register start -->
            <form class="d-none" id="signup-box" action="<?= URLROOT ?>/User/register" method="POST">
                <legend class="text-center mt-4 mb-3"> CREATE ACCOUNT</legend>
                <p style="font-size: 85%; text-align: center;">Already have an account?
                    <span class="text-link"><a id="login-btn" class="text-black" style="font-size: 90%;">Sign in
                            here</a></span>.
                </p>

                <div class="needs-validation mt-5">
                    <div class="form-group mb-4" style="font-size: 16px; ">
                        <input name="firstNameInput" class="form-control" type="firstname" id="firstname" placeholder="First Name" required>
                    </div>
                    <div class="form-group mb-4" style="font-size: 16px; ">
                        <input name="lastNameInput" class="form-control" type="lastname" id="lastname" placeholder="Last Name" required>
                    </div>

                    <div class="form-group mb-4" style="font-size: 16px; ">
                        <input name="emailInput" class="form-control" type="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="form-group mb-4" style="font-size: 16px;">
                        <input name="passwordInput1" class="form-control" type="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="form-group mb-4" style="font-size: 16px;">
                        <input name="passwordInput2" class="form-control" type="password" placeholder="Confirm Password" required>
                    </div>

                    <div style="text-align: center;">
                        <input name="signup" class="btn btn-primary w-25" type="submit" value="CREATE">
                    </div>
                </div>
            </form>
            <!-- register end -->
        </fieldset>
        </div>
        <!-- footer section start -->
        <?php
        require_once APPROOT . '/views/includes/footer.php';
        ?>
        <!-- footer section end -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="<?= JSFILE ?>/login-effect.js"></script>

</html>