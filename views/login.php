<!DOCTYPE html>
<html lang="en">

<?php require_once APPROOT . '/views/includes/head.php'; ?>
<link rel="stylesheet" href="<?= CSSFILE ?>/card_product.css">
<body>
    <!-- header section start -->
    <div class="container-fluid p-0">
    <?php require_once APPROOT . '/views/includes/nav_all.php'; ?>
        <!-- header section end -->

        <!-- Login form -->
        <form class="mt-5 mx-auto bg-white "id="login-box" action="<?= URLROOT ?>/User/login" method="POST"
            style="padding: 45px; margin-top: 100px; min-width: 300px;  max-width: 550px;">

            <legend class="text-center mt-4 mb-3">LOGIN</legend>
            <p style="font-size: 85%; text-align: center;">Don't have an account?
                <span class="text-link"><a id="signup-btn" class="text-black" style="font-size: 90%;">Sign up
                        here</a></span>.
            </p>

            <div class="needs-validation mt-5">
                <div class="form-group mb-4" style="font-size: 16px; ">
                    <input class="form-control" type="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group mb-2" style="font-size: 16px;">
                    <input class="form-control" type="password" id="password" placeholder="Password" required>

                    <div class="forgot-password" style="text-align: right; padding: 20px ; width: 100%;">
                        <button type="button" class="text-link small">Forgot your password?</button>
                    </div>
                </div>
                <div>
                    <input class="btn btn-primary w-25" type="submit" value="SIGN IN">
                    <span class="text-link">
                        <a href="#" class="text-black" style=" margin-left: 10px; font-size: 85%;">Return to
                            Store</a>
                    </span>
                </div>

            </div>
        </form>
        <!-- Login form end -->

        <!-- register start -->
        <form class="mt-5 mx-auto bg-white d-none" id="signup-box" action="<?= URLROOT ?>/User/register" method="POST"
            style="padding: 45px; margin-top: 100px; min-width: 300px;  max-width: 550px;">
            <legend class="text-center mt-4 mb-3"> CREATE ACCOUNT</legend>
            <p style="font-size: 85%; text-align: center;">Already have an account?
                <span class="text-link"><a id="login-btn" class="text-black" style="font-size: 90%;">Sign in
                        here</a></span>.
            </p>

            <div class="needs-validation mt-5">
                <div class="form-group mb-4" style="font-size: 16px; ">
                    <input class="form-control" type="firstname" id="firstname" placeholder="First Name" required>
                </div>
                <div class="form-group mb-4" style="font-size: 16px; ">
                    <input class="form-control" type="lastname" id="lastname" placeholder="Last Name" required>
                </div>

                <div class="form-group mb-4" style="font-size: 16px; ">
                    <input class="form-control" type="email" id="email" placeholder="Email" required>
                </div>

                <div class="form-group mb-4" style="font-size: 16px;">
                    <input class="form-control" type="password" id="password" placeholder="Password" required>
                </div>

                <div style="text-align: center;">
                    <input class="btn btn-primary w-25" type="submit" value="CREATE">
                </div>
            </div>
        </form>
        <!-- register end -->


        <!-- footer section start -->
        <?php
        require_once APPROOT . '/views/includes/footer.php';
        ?>
        <!-- footer section end -->
    </div>
</body>
<script src="<?= JSFILE ?>/login-effect.js"></script>

</html>