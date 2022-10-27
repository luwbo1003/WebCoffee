<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>

<link rel="stylesheet" href="<?= CSSFILE ?>/products.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?= CSSFILE ?>/cart_header.css">

<body>
    <div class="container-fluid p-0">
        <!-- header section starts -->
        <?php
        require_once APPROOT . '/views/includes/nav_home.php';
        ?>
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
                        <form action="" method="get">
                            <div class="input-group" style="margin: 20px 0px 30px 380px;">
                                <div class="form-outline">
                                    <input id="search-focus" type="search" name="search" value="
                                    <?php
                                    if (isset($_GET['search'])) {
                                        echo $_GET['search'];
                                    }
                                    ?>
                                    " class="form-control" placeholder="Search products name..." aria-label="Search" />
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
                                    <div class="row justify-content-center">
                                        <?php
                                        $link = null;
                                        taoKetNoi($link);
                                        $result = chayTruyVanTraVeDL($link, "select * from tbl_product inner join tbl_image
                                        on tbl_product.pro_image_id = tbl_image.pro_image_id
                                        where category_id=1");
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            echo "
                                                <div class='card text-center card-hover col-12 col-md-6 col-lg-3'
                                                style='border-radius: 17px;width: 18rem;'>
                                                    <div class='image'>
                                                        <img src='" . $rows['img_link'] . "' class='card-img-top' alt='...'>
                                                        <div class='icons'>
                                                            <a class='fas fa-shopping-cart shop-card'></a>
                                                            <a href='#' class='fas fa-eye'></a>
                                                            <a href='#' class='fas fa-share'></a>
                                                        </div>
                                                    </div>
                                                    <div class='card-body'>
                                                        <h5 class='card-title'>" . $rows['pro_name'] . "</h5>
                                                        <p class='price'>$" . $rows['pro_price'] . "</p>
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
                            <div id="drinks" class="collection-group-marker collection-wrap ">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xxl-4 collection-product ">
                                    <div class="row justify-content-center">
                                        <?php
                                        $link = null;
                                        taoKetNoi($link);
                                        $result = chayTruyVanTraVeDL($link, "select * from tbl_product inner join tbl_image
                                        on tbl_product.pro_image_id = tbl_image.pro_image_id
                                        where category_id=2");
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            echo "
                                                <div class='card text-center card-hover col-12 col-md-6 col-lg-3'
                                                style='border-radius: 17px;width: 18rem;'>
                                                    <div class='image'>
                                                        <img src='" . $rows['img_link'] . "' class='card-img-top' alt='...'>
                                                        <div class='icons'>
                                                            <a class='fas fa-shopping-cart shop-card'></a>
                                                            <a href='#' class='fas fa-eye'></a>
                                                            <a href='#' class='fas fa-share'></a>
                                                        </div>
                                                    </div>
                                                    <div class='card-body'>
                                                        <h5 class='card-title'>" . $rows['pro_name'] . "</h5>
                                                        <p class='price'>$" . $rows['pro_price'] . "</p>
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
                            <div id="merchandise" class="collection-group-marker collection-wrap ">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xxl-4 collection-product ">
                                    <div class="row justify-content-center">
                                        <?php
                                        $link = null;
                                        taoKetNoi($link);
                                        $result = chayTruyVanTraVeDL($link, "select * from tbl_product inner join tbl_image
                                        on tbl_product.pro_image_id = tbl_image.pro_image_id
                                        where category_id=3");
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            echo "
                                                <div class='card text-center card-hover col-12 col-md-6 col-lg-3'
                                                style='border-radius: 17px;width: 18rem;'>
                                                    <div class='image'>
                                                        <img src='" . $rows['pro_image_id'] . "' class='card-img-top' alt='...'>
                                                        <div class='icons'>
                                                            <a class='fas fa-shopping-cart shop-card'></a>
                                                            <a href='#' class='fas fa-eye'></a>
                                                            <a href='#' class='fas fa-share'></a>
                                                        </div>
                                                    </div>
                                                    <div class='card-body'>
                                                        <h5 class='card-title'>" . $rows['pro_name'] . "</h5>
                                                        <p class='price'>$" . $rows['pro_price'] . "</p>
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
                        </div>
                    </div>
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