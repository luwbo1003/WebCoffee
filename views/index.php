<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/card.css">

    <title>Coffee</title>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- header section starts  -->
        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top bg-transparent bg-d py-3 " id="nav-id">
                <div class="container">
                    <a class="navbar-brand fw-bold ps-2" href="#"> <span class="material-symbols-outlined"> local_cafe</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav"  >
                        <ul
                            class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <li class="nav-item ps-2 fs-5" >
                                <a class="nav-link " href="#">Home</a>
                            </li>
                            <li class="nav-item ps-2 fs-5">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item ps-2 fs-5">
                                <a class="nav-link" href="#">Product</a>
                            </li>
                        </ul>
                        <div class="nav-item">
                            <ul class="navbar-nav gap-2 flex-row">
                                <li>
                                    <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <span class="material-symbols-outlined">
                                            search
                                        </span>
                                    </a>
                                </li>
                                <li class="cart-icon">
                                    <a id="btn-shop-cart" class="nav-link" href="">
                                        <span class="material-symbols-outlined">
                                            shopping_cart
                                            <span class="badge rounded-pill bg-dark"></span>
                                    </a>
                                </li>
                                    <!-- <li class="dropdown">
                                        <a class="nav-link" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                            <span class="material-symbols-outlined">
                                                account_circle
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-center pt-2" data-popper-placement="bottom-start" style="height: 95px; width: 150px;">
                                            <a class="dropdown-item" type="button" href="">Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" type="button" href="">Log out</a>
                                        </div>
                                    </li> -->
                                    <li>
                                        <a class="nav-link" href="">
                                            <span class="material-symbols-outlined">
                                                account_circle
                                            </span>
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- search -->
            <div class="offcanvas offcanvas-top container" style="height: 500px;" tabindex="-1" id="offcanvasTop"
                aria-labelledby="offcanvasTopLabel">
                <button type="button" class="btn-close mt-3 ms-auto fs-5" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                <div class="container" style="padding: 100px;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasTopLabel">What are you looking for?</h5>
                    </div>
                    <div class="offcanvas-body">
                        <form class="d-flex" action="" method="POST">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- home section starts  -->
        <section class="home">
            <div class="box justify-content-start d-flex align-items-center"
                style="background: url(public/images/cf-bg1.jpg) no-repeat;">
                <div class="content">
                    <span class="text-white fs-2">Star Your Day</span>
                    <h1 class="text-uppercase pt-2" style="color: #c8a27a;"> with a black coffee</h1>
                    <a href="#" class="btn btn-primary mt-5 fs-6" id="btn_buy">Buy Now</a>
                </div>
            </div>
        </section>


        <!-- category section starts  -->
        <section class="container py-5 category">

            <h3 class="fw-light text-center pb-4 fw-bold">Idea!</h3>

            <div class="row text-center">

                <div class="col-6 col-lg-3 pt-4 pt-lg-0" >
                    <img src="public/images/category-1.jpg" class="img-fluid" alt="">
                    <h5 class="pt-3 fw-light" style="color: #219150;">Our coffee</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="public/images/category-2.jpg" class="img-fluid" alt="" >
                    <h5 class="pt-3 fw-light" style="color: #219150;">Coffee Bottle</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="public/images/category-3.jpg" class="img-fluid" alt="" >
                    <h5 class="pt-3 fw-light" style="color: #219150;">Tea</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="public/images/category-4.jpg" class="img-fluid" alt="" >
                    <h5 class="pt-3 fw-light" style="color: #219150;">Merchandise</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
            </div>
        </section>

        <!-- about section starts  -->
        <section style="background-color: #eee;">

            <div class="container py-5 ">
                <h3 class="fw-light text-center pb-4 fw-bold">About!</h3>

                <div class="row">
                    <div class="col-12 col-lg-6 pb-5">
                        <img src="public/images/cf.jpg" class="w-100" style="box-shadow: 2rem 2rem #d6d6d6;" alt="">
                    </div>
                    <div
                        class="col-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start justify-content-center ps-0 ps-lg-5">
                        <h3 style="color: #219150;">Khơi nguồn sáng tạo</h3>
                        <br>
                        <br>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature section start -->
        <section class="container py-5 product_slide">
            <div class="row gap-3 justify-content-center">
                <h3 class="fw-light text-center pb-4 fw-bold">Feature Products!</h3>
                <div class="card text-center col-12 col-md-6 col-lg-3" style="border-radius: 17px; width: 18rem;">
                    <div class="image">
                        <img src="public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
                        <div class="icons w-100">
                            <button class="btn btn-primary align-content-md-center">Add to cart</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">$10.46</p>
                    </div>
                </div>
                <div class="card text-center col-12 col-md-6 col-lg-3" style="border-radius: 17px; width: 18rem;">
                    <div class="image">
                        <img src="public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
                        <div class="icons w-100">
                            <button class="btn btn-primary align-content-md-center">Add to cart</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">$10.46</p>
                    </div>
                </div>
                <div class="card text-center col-12 col-md-6 col-lg-3" style="border-radius: 17px; width: 18rem;">
                    <div class="image">
                        <img src="public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
                        <div class="icons w-100">
                            <button class="btn btn-primary align-content-md-center">Add to cart</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">$10.46</p>
                    </div>
                </div>
                <div class="card text-center col-12 col-md-6 col-lg-3" style="border-radius: 17px; width: 18rem;">
                    <div class="image">
                        <img src="public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
                        <div class="icons w-100">
                            <button class="btn btn-primary align-content-md-center">Add to cart</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">$10.46</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer section start -->
        <footer class="footer section-gap"
            style="background: url(public/images/footer-bg.jpg) center; background-size: cover;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div>
                            <h5 class="mb-4">About Us</h5>
                            <p class="fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h5 class="mb-4">Newsletter</h5>
                            <p class="fs-6">Stay update with our latest</p>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter email"
                                        aria-label="Enter email" aria-describedby="">
                                    <button class="btn btn-primary" type="button" id="button-addon2"><span class="material-symbols-outlined">
                                        arrow_forward
                                        </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div>
                            <h5 class="mb-4">Follow Us</h5>
                            <p class="fs-6">Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>
<!-- script only  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<script src="public/js/nav.js"></script>

</html>