<html lang="en">
<?php
require_once APPROOT . '/views/includes/head.php';
?>


<body>
    <div class="container-fluid p-0">
        <!-- header section starts  -->
        <?php
        require_once APPROOT . '/views/includes/nav_home.php';
        ?>
        <!-- home section starts  -->
        <section class="home">
            <div class="box justify-content-start d-flex align-items-center" style="background: url(<?= IMAGE ?>/cf-bg1.jpg) no-repeat;">
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

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="<?= IMAGE ?>/category-1.jpg" class="img-fluid" alt="">
                    <h5 class="pt-3 fw-light" style="color: #219150;">Our coffee</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="<?= IMAGE ?>/category-2.jpg" class="img-fluid" alt="">
                    <h5 class="pt-3 fw-light" style="color: #219150;">Coffee Bottle</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="<?= IMAGE ?>/category-3.jpg" class="img-fluid" alt="">
                    <h5 class="pt-3 fw-light" style="color: #219150;">Tea</h5>
                    <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>

                <div class="col-6 col-lg-3 pt-4 pt-lg-0">
                    <img src="<?= IMAGE ?>/category-4.jpg" class="img-fluid" alt="">
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
                        <img src="<?= IMAGE ?>/cf.jpg" class="w-100" style="box-shadow: 2rem 2rem #d6d6d6;" alt="">
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start justify-content-center ps-0 ps-lg-5">
                        <h3 style="color: #219150;">Khơi nguồn sáng tạo</h3>
                        <br>
                        <br>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature section start -->
        <!-- <section class="container py-5 product_slide"> -->
        <section class="mb-5 py-5 product_slide">
            
            <div class="container">
                <div class="row gap-3 justify-content-center">
                    <div class="col-12 col-md-6 text-center " style="padding-bottom: 100px;">
                        <h3 class="fw-light text-center pb-4 fw-bold">Feature Products!</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row gap-3 text-center align-self-center">
                    <?php require_once APPROOT . '/views/includes/products_box.php'; ?>
                </div>
            </div>
        </section>


        <!-- footer section start -->
        <footer class="footer section-gap" style="background: url(<?= IMAGE ?>/footer-bg.jpg) center; background-size: cover;">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="<?= JSFILE ?>/nav.js"></script>

</html>