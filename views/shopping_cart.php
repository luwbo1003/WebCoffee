<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="<?= CSSFILE ?>/shopping_cart.css">



<body>
    <div class="container-fluid p-0">
        <?php
        require_once APPROOT . '/views/includes/nav_all.php';
        ?>

        <section class="three-col">
            <div class="container pt-2s">
                <div class="row">
                    <div class="col ">
                        <p class="fs-1">Shopping Cart</p>
                    </div>
                </div>
            </div>
        </section>
        <?php if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) : ?>
            <section class="container pb-5">
                <div class="row">
                    <div id="cart-table" class="col-12 col-xl-8 cart-table">
                        <form action="<?= URLROOT ?>/Cart/actionCart" method="post" novalidate="">
                            <div class="table-responsive-md">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="2">Item</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($_SESSION['cart'] as $prod) : extract($prod) ?>
                                            <tr>
                                                <input type="hidden" name="pro_id[]" value="<?= $pro_id ?>">
                                                <td style=" width:100px; display: flex; justify-content: space-around;" scope="row" class="">
                                                    <img src="<?= IMAGE ?>/<?= $pro_img ?>" alt="" style=" max-width:100px; max-height: 100px">
                                                </td>
                                                <td><?= $pro_name ?></td>
                                                <td>$<?= number_format($pro_price, 2, '.', ',') ?></td>
                                                <td><input type="number" name="pro_quantity_up[]" value="<?= $pro_quantity_cart ?>" style="width: 50px"></td>
                                                <td> $<?= number_format($subtotal, 2, '.', ',') ?> </td>
                                                <td>
                                                    <button type="submit" name="action" value="Delete" style="background: transparent; border: none">
                                                        <span class="material-symbols-outlined cart-delete">close</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4 mb-4 mb-xl-0 d-flex justify-content-center">
                                <div class=" gap-5">
                                    <button id="btn_empty" type="submit" name="action" value="Update cart" class="btn btn-primary">Update Cart</button>
                                    <button id="btn_empty" type="submit" name="action" value="Empty cart" class="btn btn-primary">Empty Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="cart-totals" class="col-12 col-xl-4" style="width: auto;">
                        <div class="product-summary">
                            <div class="text-black fs-4" style="margin-bottom: 30px;">
                                Cart totals
                            </div>
                            <table class="table align-middle" style="font-size: 15px;">
                                <tbody>
                                <?php if (isset($_SESSION['total'])) : ?>

                                    <tr>
                                        <td scope="row" class="text-black fw-semibold ps-0">Subtotal</td>
                                        <td class="text-end text-xl-start pe-0 p_td">$<?= number_format($_SESSION['total'], 2, '.', ',') ?></td>
                                    </tr>
                                    <?php endif; ?>

                                         <tr>
                                        <td scope="row" class="text-black fw-semibold ps-0 ">Shipping</td>
                                        <td class="pe-0">
                                            <div class="float-end float-xl-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="shipping" id="free" checked>
                                                    <label class="form-check-label" for="free">Free shipping</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="shipping" id="local">
                                                    <label class="form-check-label" for="local">Local pickup</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php if (isset($_SESSION['total'])) : ?>
                                    <tr>
                                        <td scope="row" class="text-black fw-semibold  ps-0">Total</td>
                                        <td class="text-end  text-xl-start  pe-0 p_td">
                                            <p class="fw-semibold fs-4 text-black">$<?= number_format($_SESSION['total'] * 1.1, 2, '.', ',') ?></p>
                                            <span class="fs-6">(Includes $ <?= number_format($_SESSION['total'] * 0.1, 2, '.', ',') ?> tax)</span>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="d-flex flex-column justify-content-center mt-2 mt-xl-5">
                                <a href="<?= URLROOT ?>/Home/empty" class="btn btn-primary text-decoration-none">
                                    Proceed to checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <div class="text-center pt-5">
                <p class="fs-3">You have no products in your cart</p>
            </div>
            <form action="<?= URLROOT ?>/Home/index" method="POST" class="mt-5 text-center">
                <button class="fs-5 btn btn-primary">RETURN TO SHOP</button>
            </form>
        <?php endif; ?>
        <?php require_once APPROOT . '/views/includes/footer.php'; ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="<?= JSFILE ?>/cart.js"></script>

</html>