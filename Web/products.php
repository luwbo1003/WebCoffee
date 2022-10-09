<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <!-- website -->
    <link rel="icon" href="images/icon_page.png" type="image/gif" />
    <title>Coffee | SOUL</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!--scipt only-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- css  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- products css -->
    <link rel="stylesheet" href="css/products.css">
    <!-- index css -->
    <link rel="stylesheet" href="css/index.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <div class="container-fluid p-0">
        <!-- header section starts -->
        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top bg-coffee py-3" id="nav-id">
                <div class="container">
                    <a class="navbar-brand fw-bold ps-2" href="#"> <i class="fa-solid fa-mug-saucer" style="font-size: 25px;"></i>
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
                            </li>
                            <!-- Card -->
                            <div id="card-shop">
                                <h2 class="card-title1">Your Cart</h2>
                                <!-- content -->
                                <div class="card-content" style="margin-top: 30px;">
                                    <!-- <div class="card mb-3 product-box" style="max-width: 350px;">
                                    </div> -->
                                </div>
                                <!-- Total -->
                                <div class="total">
                                    <div class="total-title">Total</div>
                                    <div class="total-price">$0</div>
                                </div>
                                <!-- Buy button -->
                                <button type="button" class="btn btn-primary btn-buy">Buy Now</button>
                                <!-- Close -->
                                <span onclick="closeCart()" type="button">
                                    <i id="card-close" class="fa-solid fa-xmark fs-4"></i>
                                </span>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- home section starts  -->
        <section class="home">
            <div class="box justify-content-start d-flex align-items-center" style="background: url(./images/cf-bg1.jpg) no-repeat;">
                <div class="content">
                    <span class="text-white fs-2">Star Your Day</span>
                    <h1 class="text-uppercase pt-2" style="color: #c8a27a;"> with a black coffee</h1>
                    <!-- <a href="#" class="btn btn-primary mt-5 fs-6" id="btn_buy">Buy Now</a> -->
                </div>
            </div>
        </section>
        <!-- home section ends -->

        <!-- Search section starts -->
        <div class="container-wrapper">
            <form action="search-box.php" method="get">
                <div class="input-group">
                    <div class="form-outline">
                        <input id="search-focus" type="search" name="search" value="" class="form-control" placeholder="Search products name..." aria-label="Search" />
                    </div>
                    <button type="button" class="btn btn-primary btn-search" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .80rem;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <!-- <div class="Buttons">
                <a class="btn btn-primary" href="#" role="button">All</a>
                <a class="btn btn-primary" href="#" role="button">Our Coffee</a>
                <a class="btn btn-primary" href="#" role="button">Cold Brew</a>

            </div> -->
        </div>
        <!-- Search section ends -->

        <!-- products section starts  -->
        <section class="main">
            <div class="container">
                <div class="inner">
                    <div class="slide">
                        <div class="justify-content-center">
                            <div class="text-fade title text-center coffee" style="padding: 0 135px;">
                                <h2>Our Coffee</h2>
                                <span style="font-weight: 250;">We have carefully selected great tasting coffees from
                                    around
                                    the
                                    world.</span>
                            </div>
                        </div>
                        <br>
                        <div class="card espresso_list">
                            <div class="row justify-content-center">
                            <!-- <div class="card text-center card-hover col-12 col-md-6 col-lg-3" style="border-radius: 17px;width: 18rem;">
                                    <div class="image">
                                        <img src="images/Sb_EnerChoco.jpg" class="card-img-top" alt="...">
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
                                </div> -->
                                <?php
                                include "module.php";
                                $link = null;
                                taoKetNoi($link);
                                $result = chayTruyVanTraVeDL($link, "select * from products");
                                while ($rows = mysqli_fetch_assoc($result)) {
                                    echo "
                                        <div class='card text-center card-hover col-12 col-md-6 col-lg-3'
                                    style='border-radius: 17px;width: 18rem;'>
                                    <div class='image'>
                                        <img src='" . $rows['img'] . "' class='card-img-top' alt='...'>
                                        <div class='icons'>
                                            <a class='fas fa-shopping-cart shop-card'></a>
                                            <a href='#' class='fas fa-eye'></a>
                                            <a href='#' class='fas fa-share'></a>
                                        </div>
                                    </div>
                                    <div class='card-body'>
                                        <h5 class='card-title'>" . $rows['namesp'] . "</h5>
                                        <p class='price'>$" . $rows['price'] . "</p>
                                        <div class='stars'>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half-alt'></i>
                                        </div>
                                    </div>
                                </div>";
                                }
                                giaiPhongBoNho($link, $result);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="slide pt-5">
                        <div class="justify-content-center">
                            <div class="text-fade title text-center coffee">
                                <h2>Cold Brew</h2>
                                <span style="font-weight: 250;">How is taste?</span>
                            </div>
                        </div>
                        <div class="card espresso_list">
                            <div class="row justify-content-center">
                                <div class="card text-center card-hover col-12 col-md-6 col-lg-3" style="border-radius: 17px;width: 18rem;">
                                    <div class="image">
                                        <img src="images/Sb_EnerCoffee5.jpg" class="card-img-top" alt="...">
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
                </div>
            </div>
        </section>
        <!-- footer section start -->
        <footer class="footer section-gap" style="background: url(./images/footer-bg.jpg) center; background-size: cover;">
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

    <!-- js file link -->
    <script src="js/products.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>