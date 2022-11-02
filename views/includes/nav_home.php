<nav class="navbar navbar-expand-lg fixed-top bg-transparent bg-d py-3 " id="nav-id">
    <div class="container">
        <a class="navbar-brand fw-bold ps-2" href="#">
            <img src="<?= IMAGE ?>/Header_Logo.png" alt=" " style="width: 35px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                <li class="nav-item ps-2fs-5">
                    <a class="nav-link " href="<?= URLROOT ?>/Home/index">Home</a>
                </li>
                <li class="nav-item ps-2 ">
                    <a class="nav-link" href="<?= URLROOT ?>/Home/about">About</a>
                </li>
                <li class="nav-item ps-2 ">
                    <a class="nav-link" href="<?= URLROOT ?>/Home/products">Shop</a>
                </li>
            </ul>
            <div class="nav-item">
                <ul class="navbar-nav gap-2 flex-row">
                    <li>
                        <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </a>
                    </li>
                    <li onclick="openCart()" class="nav-item align-items-center ps-2 shop-btn">
                        <a id="btn-shop-cart" class="nav-link" type="button">
                            <span class="material-symbols-outlined">
                                shopping_cart
                                <span class="badge rounded-pill bg-dark"></span>
                        </a>
                    </li>

                    <?php if (!empty($_SESSION['user_id'])) : ?>

                        <li class="dropdown">
                            <a class="nav-link" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <span class="material-symbols-outlined">
                                    account_circle
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-center pt-2" data-popper-placement="bottom-start" style="height: 95px; width: 150px;">
                                <?php if ($_SESSION['user_type'] == 1) : ?>

                                    <a class="dropdown-item" type="button" href="<?= URLROOT ?>/User/profile">Profile</a>

                                <?php else : ?>

                                    <a class="dropdown-item" type="button" href="<?= URLROOT ?>/User/profile">Administrator</a>

                                <?php endif; ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" type="button" href="<?= URLROOT ?>/User/logout">Log out</a>
                            </div>
                        </li>

                    <?php else : ?>

                        <li>
                            <a class="nav-link" href="<?= URLROOT ?>/User/index">
                                <span class="material-symbols-outlined">
                                    account_circle
                                </span>
                            </a>
                        </li>

                    <?php endif; ?>

                    <?php require_once APPROOT . '/views/includes/cart_header.php'; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php
require_once APPROOT . '/views/includes/search_box.php';
?>