<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="../public/css/shopping_cart.css">


<body>
    <div class="container-fluid p-0">
        <?php
        require_once APPROOT . '/views/includes/nav_all.php';
        ?>

        <section class="three-col">
            <div class="container pt-2">
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
                                                <td style=" width:100px;" scope="row" class="">
                                                    <img src="<?= IMAGE ?>/<?= $pro_img ?>" alt="" style=" width:100px;">
                                                </td>
                                                <td><?= $pro_name ?></td>
                                                <td><?= $pro_price ?></td>
                                                <td><input type="number" name="pro_quantity_up[]" value="<?= $pro_quantity_cart ?>" style="width: 50px"></td>
                                                <td> <?= $subtotal ?> </td>
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

                                    <tr>
                                        <td scope="row" class="text-black fw-semibold ps-0">Subtotal</td>
                                        <td class="text-end text-xl-start pe-0 p_td"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row" class="text-black fw-semibold  ps-0">Total</td>
                                        <td class="text-end  text-xl-start  pe-0 p_td">
                                            <p class="fw-semibold fs-4 text-black">$</p>
                                            <span class="fs-6">(Includes $ tax)</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex flex-column justify-content-center mt-2 mt-xl-5">
                                <a href="<?= URLROOT ?>/Home/checkout" class="btn btn-primary text-decoration-none">
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
<script src="../public/js/cart.js"></script>

</html>