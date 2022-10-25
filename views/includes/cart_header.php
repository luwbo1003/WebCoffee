<?php if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) : ?>

    <div id="card-shop">
        <h2 class="card-title1">Your Cart</h2>
        <!-- content -->
        <?php foreach ($_SESSION['cart'] as $prod) : extract($prod) ?>
            <div class="card-content" style="margin-top: 30px;">
                <div class="row g-0 card-box">
                    <div class="col-md-3">
                        <img src= "<?= IMAGE ?>/<?= $pro_img ?>" class="img-fluid rounded-start" alt="..." style="width: 72px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="margin-left: 2px; margin-top: -10px;">
                            <p class="product-title fw-bold"><?= $pro_name ?></p>
                            <p class="card-price"> <?= $pro_quantity_cart ?> x $<?= number_format($pro_price, 2, '.', ',') ?></p>
                        </div>
                    </div>
                    <!-- Remove Card -->
                    <i class="fa-solid fa-trash remove-card"></i>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Total -->
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">$0</div>
        </div>
        <!-- Buy button -->

        <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Go to cart</a>
        <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Check Out</a>
        <!-- Close -->
        <span onclick="closeCart()" type="button">
            <i id="card-close" class="fa-solid fa-xmark fs-4"></i>
        </span>

    </div>

<?php endif; ?>