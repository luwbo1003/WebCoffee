<?php if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) : ?>

    <div id="card-shop">
        <h2 class="card-title1">Your Cart</h2>
        <!-- content -->
        <form action="<?= URLROOT ?>/Cart/actionCart" method="post" novalidate="">
            <?php foreach ($_SESSION['cart'] as $prod) : extract($prod) ?>
                <input type="hidden" name="pro_id[]" value="<?= $pro_id ?>">
                <div class="card-content" style="margin-top: 30px;">
                    <div class="row g-0 card-box">
                        <div class="col-md-3">
                            <img src="<?= IMAGE ?>/<?= $pro_img ?>" class="img-fluid rounded-start" alt="..." style="max-height: 80px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="margin-left: 2px; margin-top: -10px;">
                                <p class="product-title fw-bold"><?= $pro_name ?></p>
                                <p class="card-price"> <?= $pro_quantity_cart ?> x $<?= number_format($pro_price, 2, '.', ',') ?></p>
                            </div>
                        </div>
                        <!-- Remove Card -->
                        <button type="submit" name="action" value="Delete" style="background: transparent; border: none">
                            <span class="material-symbols-outlined cart-delete">close</span>
                        </button>

                    </div>

                </div>
            <?php endforeach; ?>
        </form>
        <!-- Total -->
        <div class="total">
            <?php if (isset($_SESSION['total'])) : ?>
                <div class="total-title">Total</div>
                <div class="total-price">$<?= number_format($_SESSION['total'], 2, '.', ',') ?></div>
            <?php endif; ?>
        </div>
        <!-- Buy button -->

        <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Go to cart</a>
        <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Check Out</a>
        <!-- Close -->
        <span onclick="closeCart()" type="button">
            <i id="card-close" class="fa-solid fa-xmark fs-4"></i>
        </span>

    </div>
<?php else : ?>
    <div id="card-shop">
        <h2 class="card-title1">no product</h2>
        <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Go to cart</a>
        <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Check Out</a>
        <!-- Close -->
        <span onclick="closeCart()" type="button">
            <i id="card-close" class="fa-solid fa-xmark fs-4"></i>
        </span>
    </div>
<?php endif; ?>