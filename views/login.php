<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- script only  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    <title>Login</title>
</head>

<body>
    <!-- header section start -->
    <div class="container-fluid p-0">
        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top bg-coffee py-3" id="nav-id">
                <div class="container">
                    <a class="navbar-brand fw-bold ps-2" href="#"> <i class="fa-solid fa-mug-saucer"
                            style="font-size: 25px;"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul
                            class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-start align-items-lg-center  ">
                            <li class="nav-item ps-2">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item ps-2">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item ps-2">
                                <a class="nav-link" href="#">Product</a>
                            </li>
                            <li class="nav-item align-items-center ps-2">
                                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item align-items-center ps-2">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-cart-shopping shop-btn"></i>
                                </a>
                            </li>
                            <li class="nav-item align-items-center ps-2">
                                <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
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