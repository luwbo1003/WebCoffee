<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="<?= CSSFILE ?>/cart_header.css">

<body>
    <div class="container-fluid p-0 ">
        <!--HEADER-->
        <?php
        require_once APPROOT . '/views/includes/nav_all.php';
        ?>

        <!--WELCOME-->
        <section class="about mt-5 p-5">
            <div class="row py-5">
                <div class="col">
                    <h2 class="text-center py-5" style="font-weight: 600;">CHÚNG TÔI LÀ STARBORK</h2>
                    <div id="carouselExampleControls" class="carousel slide w-50 mx-auto" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../public/images/1.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../public/images/2.jpg" class="d-block w-100">
                            </div>
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
            </div>

            <!--NGUON GOC VA QUA TRINH PHAT TRIEN-->
            <div class="row-no-margin py-5 ">
                <div class="col">
                    <h2 class="text-center py-5" style="font-weight: 600;">NGUỒN GỐC & QUÁ TRÌNH PHÁT TRIỂN</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 px-4 text-jusify">
                        <p class="fw-bold" style="margin-left:60px">Từ tháng 1/2021 - tháng 7/2021</p>
                        <p class="text-jusify" style="margin-left:60px; text-align: left">Starbork bắt đầu từ một trang
                            web nhỏ chuyên
                            xách
                            tay các loại cafe từ tất cả
                            các thương hiệu lớn
                            nhỏ của Việt Nam. Sau 7 tháng, cửa hàng bán lẻ đầu tiên của Starbork khai trương và mở rộng
                            hợp
                            tác với các hãng cafe nước ngoài.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="../public/images/store.jpg" class="w-75 d-block mx-auto img-fluid">
                    </div>
                </div>
                <div class="row py-5">

                    <div class="col-lg-6">
                        <img src="../public/images/store2.jpg" class="w-75 d-block mx-auto img-fluid">
                    </div>
                    <div class="col-lg-6 px-1">
                        <p class="fw-bold" style="margin-left:20px">Từ tháng 8/2021 - tháng 6/2021</p>
                        <p class="text-justify" style=" margin-left:20px; text-align: left; margin-right: 40px">Để hiện
                            thực mục tiêu ban đầu là tạo một không
                            gian
                            chạy deadline hiệu quả
                            cho khách hàng thì
                            Starbork đã quyết định mở quán cafe tại chỗ đầu tiên tại TP Hồ Chí Minh. Từ khởi đầu tuyệt
                            vời
                            đó, những chi nhánh Starbork càng được mở rộng ở nhiều thành phố trên khắp cả nước từ Nam ra
                            Bắc
                            với nhiều concept trang trí đa dạng để đáp ứng nhu cầu của tất cả đối tượng khách hàng.
                        </p>
                    </div>

                </div>
            </div>

            <!--DOI TAC-->
            <div class="row-no-margin ">
                <h2 class="text-center py-5" style="font-weight: 600;">ĐỐI TÁC</h2>
                <p class="text-center mx-5 px-5">Với phương châm luôn đặt lợi ích của khách hàng lên đầu, Starbork chọn
                    lựa và hợp tác với các nhãn hàng và đối tác có uy tín lớn, kỹ càng và cẩn trọng trong tất cả các
                    khâu kiểm duyệt nhằm mang đến cho khách hàng sản phẩm và trải nghiệm tốt nhất.</p>
                <div class="row px-5 py-5 text-center" style="align-items:center;">
                    <div class="col"><img src="../public/images/nestle.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/mccafe.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/alibaba.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/highland.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/trungnguyen.jpg" class="w-50"></div>
                </div>
                <div class="row px-5 text-center" style="padding-bottom:3rem; align-items:center">
                    <div class="col"><img src="../public/images/dunkin.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/gloria.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/lavazza.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/phuclong.jpg" class="w-50"></div>
                    <div class="col"><img src="../public/images/costa.jpg" class="w-50"></div>
                </div>
            </div>
        </section>

        <!--FOOTER-->
        <footer class="footer section-gap" style="background: url(../public/images/footer-bg.jpg) center; background-size: cover;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div>
                            <h5 class="mb-4">About Us</h5>
                            <p class="fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="">
                            <h5 class="mb-4">Newsletter</h5>
                            <p class="fs-6">Stay update with our latest</p>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter email" aria-label="Enter email" aria-describedby="">
                                    <button class="btn btn-primary btn_arrow" type="button" id="btn_arrow"><i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div>
                            <h5 class="mb-4">Follow Us</h5>
                            <p class="fs-6">Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= JSFILE ?>/products.js"></script>
</body>

</html>