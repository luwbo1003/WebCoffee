<!DOCTYPE html>
<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="<?= CSSFILE ?>/m_product.css">

<body>
    <div class="container-fluid p-0">
        <!-- Sidebar -->
        <?php
        require_once APPROOT . '/views/includes/m_bar.php';
        ?>

        <!-- Main content -->
        <div id="main-content" style="min-height: 100vh; margin-left: 340px; right: 0; bottom: 0; left: 0;">
            <!-- Title -->
            <section class="container-fluid shadow-sm">
                <div class="row p-4">
                    <!-- title -->
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start pb-4 pb-lg-0">
                        <a> <span class="material-symbols-outlined align-middle me-3" id="menu-btn" style="font-size: 40px;"> menu
                            </span> </a>
                        <span class="fw-semibold fs-3">Staff Management</span>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <!-- button add new -->
                        <div>
                            <button onclick="addProduct()" type="button" class="btn btn-info d-flex align-items-center fs-5">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Search -->
            <section class="my-4">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-text material-symbols-outlined">search</span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                    </div>
                </div>
            </section>

            <!-- product -->
            <section class="py-4">
                <div class="container ">
                    <div class="table-responsive">
                        <table class=" table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php if (!empty($data['emp'])) :
                                    $i = 0;
                                    foreach ($data['emp'] as $emp) : extract($emp); ?>
                                        <tr>
                                            <th scope="row"><?= $staff_id ?></th>
                                            <td><?= $lastname ?> <?= $firstname ?></td>
                                            <td class="text-center utility">
                                                <div class="d-flex justify-content-center">
                                                    <form action="<?= URLROOT ?>/Manage/showEdit/<?= $user_id ?>" method="POST">
                                                        <button name="editEmployee" type="submit" class="material-symbols-outlined edit border border-0 bg-white">edit</button>
                                                    </form>
                                                    <form action="<?= URLROOT ?>/Manage/deleteEmployee/<?= $user_id ?>" method="POST">
                                                        <button name="deleteEmployee" type="submit" class="material-symbols-outlined delete border border-0 bg-white">delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                <?php $i++;
                                    endforeach;
                                endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Page Number -->
            <section class="py-4">
                <div class="container d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">&laquo;</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <!-- Modal add new product -->
        <form action="<?= URLROOT ?>/Manage/addStaff" method="POST" class="modal-layout add_product" enctype="multipart/form-data">
            <div id="add_product" class="modal-inner">
                <div class="d-flex align-items-end">
                    <span class="me-auto ps-4 fw-semibold fs-3">Add new staff</span>
                    <span class="material-symbols-outlined modal-close">
                        close
                    </span>
                </div>
                <br style="clear: both;">
                <div class="row py-2 py-md-4 px-3 px-md-4">
                    <div class=" col-12 col-lg-6">
                        <div class="px-3">
                            <!-- Name -->
                            <div class="row mb-4">
                                <div class="col">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="firstNameInput" placeholder="First Name" required>
                                </div>
                                <div class="col">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lastNameInput" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-lg-6">
                        <div class="px-3">
                            <div class="mb-4">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name="emailInput" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="passwordInput1" placeholder="Password" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="passwordInput2" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="mt-auto d-inline-flex btn-group gap-3 align-self-center ">
                            <button type="submit" name="addStaff" class="btn btn-primary">Add Staff</button>
                            <button type="button" class="btn btn-outline-primary btn_close">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="<?= JSFILE ?>/m_bar.js"></script>
<script src="<?= JSFILE ?>/m_product.js"></script>
<script src="<?= JSFILE ?>/m_staff.js"></script>

</html>