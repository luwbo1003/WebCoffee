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

    <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Go to cart</a>
    <a class="btn btn-primary btn-buy justify-content-center" href="<?= URLROOT ?>/Home/shopping_cart" type="submit">Check Out</a>
    <!-- Close -->
    <span onclick="closeCart()" type="button">
        <i id="card-close" class="fa-solid fa-xmark fs-4"></i>
    </span>
</div>