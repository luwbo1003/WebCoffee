<nav class="navbar navbar-expand-lg fixed-top bg-transparent bg-d py-3 " id="nav-id">
    <div class="container">
        <a class="navbar-brand fw-bold ps-2" href="#"> <span class="material-symbols-outlined"> local_cafe</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul
                class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                <li class="nav-item ps-2 fs-5">
                    <a class="nav-link " href="#">Home</a>
                </li>
                <li class="nav-item ps-2 fs-5">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item ps-2 fs-5">
                    <a class="nav-link" href="#">Product</a>
                </li>
            </ul>
            <div class="nav-item">
                <ul class="navbar-nav gap-2 flex-row">
                    <li>
                        <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </a>
                    </li>
                    <li class="cart-icon">
                        <a id="btn-shop-cart" class="nav-link" href="">
                            <span class="material-symbols-outlined">
                                shopping_cart
                                <span class="badge rounded-pill bg-dark"></span>
                        </a>
                    </li>
                    <!-- <li class="dropdown">
                                        <a class="nav-link" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                            <span class="material-symbols-outlined">
                                                account_circle
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-center pt-2" data-popper-placement="bottom-start" style="height: 95px; width: 150px;">
                                            <a class="dropdown-item" type="button" href="">Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" type="button" href="">Log out</a>
                                        </div>
                    </li> -->
                    <li>
                        <a class="nav-link" href="">
                            <span class="material-symbols-outlined">
                                account_circle
                            </span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php
require_once APPROOT . '/views/includes/search_box.php';
?>