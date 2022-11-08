<html lang="en">
<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="<?= CSSFILE ?>/card_product.css">

<body>
    <div class="container-fluid p-0">
        <?php
        require_once APPROOT . '/views/includes/nav_all.php';
        ?>
        <!-- End of Navigation -->

        <!-- Product Detail Star -->
        <section style="margin-top: 100px;">
            <?php
            if (!empty($data['prod'])) :
                foreach ($data['prod'] as $prod) : extract($prod);
            ?>

                    <div class="container mb-5">
                        <div class="row d-flex flex-row">
                            <div class="col-md-5 px-0 px-lg-5 mt-5">

                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        $i = 0;
                                        for ($i = 0; $i < count($data['image']); $i++) :
                                            if ($i == 0) : ?>
                                                <div class="carousel-item active">
                                                    <img src="<?= IMAGE ?>/<?= $data['image'][$i]['img_link'] ?>" class="d-block mx-auto img_carousel" alt="..." style="max-height: 400px;">
                                                </div>
                                            <?php else : ?>
                                                <div class="carousel-item">
                                                    <img src="<?= IMAGE ?>/<?= $data['image'][$i]['img_link'] ?>" class="d-block mx-auto img_carousel" alt="..." style="max-height: 400px;">
                                                </div>
                                        <?php endif;
                                        endfor; ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <h6 class="text-uppercase text-secondary">Starbuck</h6>
                                <div><a id="bylineInfo" class="a-link-normal" href="<?= URLROOT ?>/Home/products">Visit the Tzus'Coffee </a></div>

                                <h1><?= $pro_name ?></h1>
                                <h2 class="text-secondary fw-bold">$<?= $pro_price ?></h2>

                                <form action="<?= URLROOT ?>/Cart/addProductToCart/<?= $pro_id ?>" method="POST">
                                    <div class="gap-5 d-flex flex-row align-middle align-self-center ">
                                        <p>tags: </p>
                                    </div>
                                    <div class="gap-5 d-flex flex-row align-middle align-self-center ">
                                        <p class="align-self-center">Quantity:</p>
                                        <div class="d-inline-block product-quantity">
                                            <input class="form-control" type="number" value="1" min="0" max="<?= $pro_quantity ?>" style="width: 130px">
                                        </div>
                                    </div>

                                    <div class=" fs-6 my-5">
                                        <button type="submit" name="addToCart" class="btn btn-primary" id="btn_addtocart">
                                            <i class="bi bi-cart-plus-fill"></i>
                                            Add to Cart
                                        </button>
                                        <button type="submit" class="btn btn-primary ms-5">
                                            <i class="bi bi-cart-plus-fill"></i>
                                            Buy Now
                                        </button>

                                    </div>
                                </form>
                                <div>
                                    <div class="accordion accordion-flush" id="accordionExample">
                                        <div class="accordion-item">
                                            <h1 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <strong>About this item</strong>
                                                </button>
                                            </h1>
                                            <div id="collapseOne" class="accordion-collapse collapse show mt-3" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <table class="a-normal a-spacing-micro">
                                                    <?php
                                                    if (!empty($data['des'])) :
                                                        foreach ($data['des'] as $des) : extract($des);
                                                    ?>
                                                            <tbody>
                                                                <tr class="a-spacing-small po-brand">
                                                                    <td class="a-span3"> <STRONG>Brand:</STRONG> </td>
                                                                    <td class="a-span9"> <span class="a-size-base"><?= $pro_brand ?></span> </td>
                                                                </tr>
                                                                <tr class="a-spacing-small po-item_form">
                                                                    <td class="a-span3"> <strong>Item Form:</strong> </td>
                                                                    <td class="a-span9"> <span class="a-size-base"><?= $pro_form ?></span> </td>
                                                                </tr>
                                                                <tr class="a-spacing-small po-flavor">
                                                                    <td class="a-span3"> <strong>Flavor:</strong> </td>
                                                                    <td class="a-span9"> <span class="a-size-base"><?= $pro_flavor ?></span> </td>
                                                                </tr>
                                                                <tr class="a-spacing-small po-caffeine_content">
                                                                    <td class="a-span3"> <strong>Caffeine Content: </strong> </td>
                                                                    <td class="a-span9"> <span class="a-size-base"><?= $pro_caffein ?></span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="a-spacing-small po-coffee_roast_level">
                                                                    <td class="a-span3"> <strong>Roast Level: </strong> </td>
                                                                    <td class="a-span9"> <span class="a-size-base"><?= $pro_roast_level ?></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                    <?php endforeach;
                                                    endif; ?>
                                                </table>
                                                <div id="feature-bullets" class="a-section a-spacing-medium a-spacing-top-small">
                                                    <ul class="a-unordered-list a-vertical a-spacing-mini">
                                                        <!-- <li><span class="a-list-item"> Includes 12 (13.7oz) bottles of Starbucks
                                                                Frappuccino, Caramel
                                                                flavor </span></li>
                                                        <li><span class="a-list-item"> An indulgent blend of buttery caramel
                                                                flavor and real brewed
                                                                Strarbucks coffee with creamy milk. </span></li> -->
                                                        <li><span class="a-list-item"> Inspired by a classic enjoyed in our
                                                                cafes everyday </span></li>
                                                        <li><span class="a-list-item"> Made with the finest arabica coffee
                                                                beans. </span></li>
                                                        <li><span class="a-list-item"> Flavor that Pops that Starbucks Coffee
                                                                feeling Made Ready </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h1 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <strong>Ingredients</strong>
                                                </button>
                                            </h1>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <span>See nutrition panel</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif; ?>
        </section>
        <!-- Product Detail End -->

        <!-- feature section start -->
        <section class="container py-5 product_slide">

            <div class="container">
                <div class="row gap-3 justify-content-center">
                    <div class="col-12 col-md-6 text-center " style="padding-bottom: 100px;">
                        <h2 class="fw-light text-center pb-4 fw-bold">YOU MAY ALSO ENJOY</h2>
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
        <?php
        require_once APPROOT . '/views/includes/footer.php';
        ?>
    </div>
    <style>
        #btn_addtocart {
            background: #fff;
        }

        #btn_addtocart:hover {
            color: #c8a27a;
        }
    </style>
    <!-- Script only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="<?= JSFILE ?>/detail.js"></script>
</body>

</html>