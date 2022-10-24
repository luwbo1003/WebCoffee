<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>

<link rel="stylesheet" href="<?= CSSFILE ?>/products.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<body>
    <div class="container-fluid p-0">
        <!-- header section starts -->
        <?php
        require_once APPROOT . '/views/includes/nav_home.php';
        ?>
            <!-- <nav class="navbar navbar-expand-lg fixed-top bg-transparent bg-d py-3" id="nav-id">
                <div class="container">
                    <a class="navbar-brand fw-bold ps-2" href="#">
                        <img src="../public/images/Header_Logo.png" alt="" style="width: 38px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-start align-items-lg-center  ">
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
                            <li onclick="openCart()" class="nav-item align-items-center ps-2 shop-btn">
                                <a class="nav-link" type="button">
                                    <i class="fa-solid fa-cart-shopping "></i>
                                </a>
                            </li>
                            <li class="nav-item align-items-center ps-2">
                                <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                            </li> -->
                            <!-- Card -->
                            <?php require_once APPROOT . '/views/includes/cart_header.php'; ?>
                            <!-- <li class="nav-item align-items-center ps-2">
                                <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                            </li> -->

        <!-- header section ends -->

        <!-- home section starts  -->
        <section class="home">
            <div class="box justify-content-start d-flex align-items-center" style="background: url(../public/images/cf-bg1.jpg) no-repeat;">
                <div class="content">
                    <span class="text-white fs-2">Star Your Day</span>
                    <h1 class="text-uppercase pt-2" style="color: #c8a27a;"> with a black coffee</h1>
                    <!-- <a href="#" class="btn btn-primary mt-5 fs-6" id="btn_buy">Buy Now</a> -->
                </div>
            </div>
        </section>
        <!-- home section ends -->

        <!-- products section starts  -->
        <section class="main">
            <div class="collection container">
                <div class="row g-3 col-products">
                    <div class="col-xs-12 col-sm-12 col-12 collection-header">
                        <form action="search-box.php" method="get">
                            <div class="input-group" style="margin: 20px 0px 30px 380px;">
                                <div class="form-outline">
                                    <input id="search-focus" type="search" name="search" value="" class="form-control" placeholder="Search products name..." aria-label="Search" />
                                </div>
                                <button type="button" class="btn btn-primary btn-search" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .80rem;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div class="text-fade title text-center coffee">
                            <h2>Products</h2>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 collection-group_bar" style="border-right-style: groove;">
                        <div class="col-xs-12 section--collection-sidebar">
                            <a href="#our-coffee" data-position="our-coffee" class="collection-nav-item">
                                <h2 class="collection-sidebar__heading">Our Coffee</h2>
                            </a>
                            <a href="#drinks" data-position="drinks" class="collection-nav-item ">
                                <h2 class="collection-sidebar__heading">Drinks</h2>
                            </a>
                            <a href="#merchandise" data-position="merchandise" class="collection-nav-item ">
                                <h2 class="collection-sidebar__heading">Merchandise</h2>
                            </a>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-9 collection-group_product" style="padding: 0;">
                        <div class="collection-wrap unfiltered-products">
                            <div id="our-coffee" class="collection-group-marker collection-wrap ">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xxl-4 collection-product ">
                                    <a href="" class="">
                                        <div class="row justify-content-center">
                                            <div class="card text-center card-hover col-12 col-md-6 col-lg-3" style="border-radius: 17px;width: 18rem;">
                                                <div class="image">
                                                    <img src="../public/images/Sb_EnerCoffee5.jpg" class="card-img-top" alt="...">
                                                    <div class="icons">
                                                        <a class="fas fa-shopping-cart shop-card"></a>
                                                        <a href="#" class="fas fa-eye"></a>
                                                        <a href="#" class="fas fa-share"></a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="price">$10.46</p>
                                                    <div class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="drinks" class="collection-group-marker collection-wrap ">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xxl-4 collection-product ">
                                    <a href="" class="">
                                        <div class="row justify-content-center">
                                            <div class="card text-center card-hover col-12 col-md-6 col-lg-3" style="border-radius: 17px;width: 18rem;">
                                                <div class="image">
                                                    <img src="../public/images/Sb_EnerCoffee5.jpg" class="card-img-top" alt="...">
                                                    <div class="icons">
                                                        <a class="fas fa-shopping-cart shop-card"></a>
                                                        <a href="#" class="fas fa-eye"></a>
                                                        <a href="#" class="fas fa-share"></a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">thanh thy</h5>
                                                    <p class="price">$10.46</p>
                                                    <div class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="merchandise" class="collection-group-marker collection-wrap ">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xxl-4 collection-product ">
                                    <a href="" class="">
                                        <div class="row justify-content-center">
                                            <div class="card text-center card-hover col-12 col-md-6 col-lg-3" style="border-radius: 17px;width: 18rem;">
                                                <div class="image">
                                                    <img src="../public/images/Sb_EnerCoffee5.jpg" class="card-img-top" alt="...">
                                                    <div class="icons">
                                                        <a class="fas fa-shopping-cart shop-card"></a>
                                                        <a href="#" class="fas fa-eye"></a>
                                                        <a href="#" class="fas fa-share"></a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Care</h5>
                                                    <p class="price">$10.46</p>
                                                    <div class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="inner">
                        <div class="slide">
                            <div class="justify-content-center">
                                <div class="text-fade title text-center coffee" style="padding: 0 135px;">
                                    <h2>Our Coffee</h2>
                                    <span style="font-weight: 250;">We have carefully selected great tasting coffees
                                        from
                                        around
                                        the
                                        world.</span>
                                </div>
                            </div>
                            <br>
                            <div class="card espresso_list">
                                <div class="row justify-content-center">
                                    <div class="card text-center card-hover col-12 col-md-6 col-lg-3"
                                        style="border-radius: 17px;width: 18rem;">
                                        <div class="image">
                                            <img src="../public/images/Sb_EnerChoco.jpg" class="card-img-top" alt="...">
                                            <div class="icons">
                                                <a class="fas fa-shopping-cart shop-card"></a>
                                                <a href="#" class="fas fa-eye"></a>
                                                <a href="#" class="fas fa-share"></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="price">$10.46</p>
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide pt-5">
                            <div class="justify-content-center">
                                <div class="text-fade title text-center coffee">
                                    <h2>Drinks</h2>
                                    <span style="font-weight: 250;">How is taste?</span>
                                </div>
                            </div>
                            <div class="card espresso_list">
                                <div class="row justify-content-center">
                                    <div class="card text-center card-hover col-12 col-md-6 col-lg-3"
                                        style="border-radius: 17px;width: 18rem;">
                                        <div class="image">
                                            <img src="../public/images/Sb_EnerCoffee5.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="icons">
                                                <a class="fas fa-shopping-cart shop-card"></a>
                                                <a href="#" class="fas fa-eye"></a>
                                                <a href="#" class="fas fa-share"></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="price">$10.46</p>
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="slide pt-5">
                            <div class="justify-content-center">
                                <div class="text-fade title text-center coffee">
                                    <h2>Merchandise</h2>
                                    <span style="font-weight: 250;">For every perfect beverage, there is a perfect
                                        cup</span>
                                </div>
                            </div>
                            <div class="card espresso_list">
                                <div class="row justify-content-center">
                                    <div class="card text-center card-hover col-12 col-md-6 col-lg-3"
                                        style="border-radius: 17px;width: 18rem;">
                                        <div class="image">
                                            <img src="../public/images/Sb_EnerCoffee5.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="icons">
                                                <a class="fas fa-shopping-cart shop-card"></a>
                                                <a href="#" class="fas fa-eye"></a>
                                                <a href="#" class="fas fa-share"></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="price">$10.46</p>
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div> -->
            </div>
    </div>
    </section>
    <!-- footer section start -->
    <footer class="footer section-gap" style="background: url(../public/images/footer-bg.jpg) center; background-size: cover;">
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
                                <input type="text" class="form-control" placeholder="Enter email" aria-label="Enter email" aria-describedby="">
                                <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa-solid fa-arrow-right"></i></button>
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
    <!-- section products ends -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- js file link -->
    <script src="../public/js/products.js"></script>
    <script src="../public/js/nav.js"></script>
</body>

</html>