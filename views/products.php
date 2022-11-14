<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>

<link rel="stylesheet" href="<?= CSSFILE ?>/products.css">
<link rel="stylesheet" href="<?= CSSFILE ?>/card_product.css">
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
            <div class="box justify-content-start d-flex align-items-center" style="background: url(<?= IMAGE ?>/cf-bg2.jpg) no-repeat;">
            </div>
        </section>
        <!-- home section ends -->

        <!-- products section starts  -->
        <section class="main mb-5 mt-5">
            <div class="collection container">
                <div class="row g-3 col-products">
                    <div class="col-12 d-flex justify-content-center">
                        <form class="d-flex " action="<?= URLROOT ?>/Search/searchByName" method="POST">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input id="search-focus" class="form-control" type="text" placeholder="Search products name..." name="name">
                                </div>
                                <button type="submit" class="btn btn-primary btn-search" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .80rem;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-12">
                        <div class="text-fade title text-center coffee">
                            <h2>Products</h2>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" style="border-right-style: groove;">
                        <form action="<?= URLROOT ?>/Search/searchByCategory" method="POST">
                            <div class="col-xs-12 section--collection-sidebar">
                                <?php foreach ($data['category'] as $cate) : extract($cate); ?>
                                    <button type="submit" name="category" value="<?= $cate_id ?>" class="collection-nav-item text-start" style="border: none; background:transparent;">
                                        <h2 class="collection-sidebar__heading"><?= $cate_name ?></h2>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-9 gap-2 row justify-content-center" style="padding: 0;">
                        <?php
                        require_once APPROOT . '/views/includes/products_box.php';
                        ?>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- footer section start -->
    <?php
    require_once APPROOT . '/views/includes/footer.php';
    ?>
    </div>
    <!-- section products ends -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- js file link -->
    <script src="<?= JSFILE ?>/product.js"></script>
    <script src="<?= JSFILE ?>/nav.js"></script>
</body>

</html>