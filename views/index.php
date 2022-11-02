<html lang="en">
<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="<?= CSSFILE ?>/card_product.css">

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
                    <a href="<?= URLROOT ?>/Home/products" class="btn btn-primary mt-5 fs-6" id="btn_buy">Buy Now</a>
                </div>
            </div>
        </section>
        <!-- category section starts  -->
        <section class="container py-5 category">
            <h3 class="fw-light text-center pb-4 fw-bold">Idea!</h3>
            <div class="row text-center">
                <div class="col-6 col-lg-4 pt-4 pt-lg-0">
                    <button onclick="whole_bean()" class="border-0 bg-white btn-cate">
                        <img src="<?= IMAGE ?>/cate_whole.jpg" class="img-fluid img-cate" alt="">
                        <h5 class="pt-3 fw-light" style="color: #219150;">Whole Bean</h5>
                    </button>
                </div>
                <div class="col-6 col-lg-4 pt-4 pt-lg-0">
                    <button onclick="coffee_drink()" class="border-0 bg-white btn-cate">
                        <img src="<?= IMAGE ?>/cate_bottle.jpg" class="img-fluid img-cate" alt="">
                        <h5 class="pt-3 fw-light" style="color: #219150;">Coffee Bottle</h5>
                    </button>
                </div>
                <div class="col-6 col-lg-4 pt-4 pt-lg-0">
                    <button onclick="merchandise()" class="border-0 bg-white btn-cate">
                        <img src="<?= IMAGE ?>/cate_mer.jpg" class="img-fluid img-cate" alt="">
                        <h5 class="pt-3 fw-light" style="color: #219150;">Merchandise</h5>
                    </button>
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
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature section start -->
        <section class="mb-5 py-5 product_slide">
            <div class="container">
                <div class="row gap-3 justify-content-center">
                    <div class="col-12 col-md-6 text-center " style="padding-bottom: 100px;">
                        <h3 class="fw-light text-center pb-4 fw-bold">Feature Products!</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row gap-3 text-center justify-content-center">
                    <?php
                    if (!empty($data['prod'])) :
                        $i = 0;
                        foreach ($data['prod'] as $prod) : extract($prod);
                            if ($i == 4) {
                                break;
                            } ?>
                            <div class="card text-center col-12 col-md-6 col-lg-3" style="border-radius: 17px; width: 18rem;">
                                <form action="<?= URLROOT ?>/Cart/addProductToCart/<?= $pro_id ?>" method="POST">
                                    <input type="hidden" name="pro_quantity" value="1">

                                    <div class="image">
                                        <img src="<?= IMAGE ?>/<?= $data['image'][$i]['img_link'] ?>" class="img-fluid" alt="...">
                                        <div class="icons w-100">
                                            <button type="submit" name="addToCart" class="btn btn-primary align-content-md-center shop-card">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <h6 class="card-title" style="font-size: 14px;"><?= $pro_name ?></h6>
                                        <p class="price">$<?= number_format($pro_price, 2, '.', ',') ?></p>
                                    </div>
                                </form>
                            </div>
                    <?php $i++;
                        endforeach;
                    endif; ?>
                </div>
            </div>
        </section>

        <!-- footer section start -->
        <?php
        require_once APPROOT . '/views/includes/footer.php';
        ?>

        <!-- Modal -->
        <form action="<?= URLROOT ?>/" method="POST" class="modal-layout coffee_drink">
            <div id="coffee_drink" class="modal-inner">
                <div class="d-flex align-items-end">
                    <span class="me-auto ps-4 fw-semibold fs-3">WHOLE BEAN</span>
                    <span class="material-symbols-outlined modal-close">
                        close
                    </span>
                </div>
                <br style="clear: both;">
                <div class="row py-2 py-md-4 px-3 px-md-4">
                    <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbb</p>
                </div>
            </div>
        </form>

        <form action="<?= URLROOT ?>/" method="POST" class="modal-layout whole_bean">
            <div id="whole_bean" class="modal-inner">
                <div class="d-flex align-items-end">
                    <span class="me-auto ps-4 fw-semibold fs-3">COFFEE DRINK</span>
                    <span class="material-symbols-outlined modal-close">
                        close
                    </span>
                </div>
                <br style="clear: both;">
                <div class="row py-2 py-md-4 px-3 px-md-4">
                    <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbb</p>
                </div>
            </div>
        </form>

        <form action="<?= URLROOT ?>/" method="POST" class="modal-layout merchandise">
            <div id="merchandise" class="modal-inner">
                <div class="d-flex align-items-end">
                    <span class="me-auto ps-4 fw-semibold fs-3 align-content-center">MERCHANDISE</span>
                    <span class="material-symbols-outlined modal-close">
                        close
                    </span>
                </div>
                <br style="clear: both;">
                <div class="row py-2 py-md-4 px-3 px-md-4">
                    <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbb</p>
                </div>
            </div>
        </form>
    </div>
</body>
<!-- script only  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="<?= JSFILE ?>/nav.js"></script>
<script src="<?= JSFILE ?>/products.js"></script>
<script src="<?= JSFILE ?>/modal.js"></script>

</html>