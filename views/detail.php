<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>
<body>
    <div class="container-fluid p-0">
        <?php
            require_once APPROOT . '/views/includes/nav_all.php';
        ?>
        <!-- End of Navigation -->

        <!-- Product Detail Star -->
        <section style="margin-top: 100px;">
            <div class="container mb-5">
                <div class="row d-flex flex-row">
                    <div class="col-md-5 px-0 px-lg-5 mt-5">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/images/Sb_FrapCara.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/images/Sb_FrapAll.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/images/Sb_FrapCara1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <h6 class="text-uppercase text-secondary">Starbuck</h6>
                        <div><a id="bylineInfo" class="a-link-normal" href="#">Visit the Tzus'Coffee </a></div>

                        <h1>Starbucks Frappuccino Coffee Drink</h1>
                        <h2 class="text-secondary fw-bold">$34.57</h2>


                        <div class="gap-5 d-flex flex-row align-middle align-self-center ">
                            <p class="align-self-center">Quantity:</p>
                            <div class="d-inline-block product-quantity">
                                <input class="form-control" type="number" value="1" min="0" style="width: 130px">
                            </div>
                        </div>

                        <div class=" fs-6 my-5">
                            <button class="btn btn-primary" id="btn_addtocart">
                                <i class="bi bi-cart-plus-fill"></i>
                                Add to Cart
                            </button>
                            <button class="btn btn-primary ms-5">
                                <i class="bi bi-cart-plus-fill"></i>
                                Buy Now
                            </button>

                        </div>

                        <div>
                            <div class="accordion accordion-flush" id="accordionExample">
                                <div class="accordion-item">
                                    <h1 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <strong>About this item</strong>
                                        </button>
                                    </h1>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <table class="a-normal a-spacing-micro">
                                            <tbody>
                                                <tr class="a-spacing-small po-brand">
                                                    <td class="a-span3"> <STRONG>Brand:</STRONG> </td>
                                                    <td class="a-span9"> <span class="a-size-base">Starbucks - RTD
                                                            Coffee</span> </td>
                                                </tr>
                                                <tr class="a-spacing-small po-item_form">
                                                    <td class="a-span3"> <strong>Item Form:</strong> </td>
                                                    <td class="a-span9"> <span class="a-size-base">Liquid</span> </td>
                                                </tr>
                                                <tr class="a-spacing-small po-flavor">
                                                    <td class="a-span3"> <strong>Flavor:</strong> </td>
                                                    <td class="a-span9"> <span class="a-size-base">Caramel</span> </td>
                                                </tr>
                                                <tr class="a-spacing-small po-caffeine_content">
                                                    <td class="a-span3"> <strong>Caffeine Content: </strong> </td>
                                                    <td class="a-span9"> <span class="a-size-base">Caffeinated</span>
                                                    </td>
                                                </tr>
                                                <tr class="a-spacing-small po-coffee_roast_level">
                                                    <td class="a-span3"> <strong>Roast Level: </strong> </td>
                                                    <td class="a-span9"> <span class="a-size-base">Medium_roast</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="feature-bullets"
                                            class="a-section a-spacing-medium a-spacing-top-small">
                                            <ul class="a-unordered-list a-vertical a-spacing-mini">
                                                <li><span class="a-list-item"> Includes 12 (13.7oz) bottles of Starbucks
                                                        Frappuccino, Caramel
                                                        flavor </span></li>
                                                <li><span class="a-list-item"> An indulgent blend of buttery caramel
                                                        flavor and real brewed
                                                        Strarbucks coffee with creamy milk. </span></li>
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>Ingredients</strong>
                                        </button>
                                    </h1>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
        </section>
        <!-- Product Detail End -->

        <!-- feature section start -->
        <section class="container py-5 product_slide">
            
            <div class="row gap-3 justify-content-center">
                <h2 class="fw-light text-center pb-4 fw-bold"> YOU MAY ALSO ENJOY</h2>
                <div class="card text-center col-12 col-md-6 col-lg-3" style="border-radius: 17px; width: 18rem;">
                    <div class="image">
                        <img src="../public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
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
                        <img src="../public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
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
                        <img src="../public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
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
                        <img src="../public/images/Sb_EnerChoco.jpg" class="img-fluid" alt="...">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>