<!DOCTYPE html>
<html lang="en">

<?php require_once APPROOT . '/views/includes/head.php'; ?>

<body>
    <!-- header section start -->
    <div class="container-fluid p-0">
        <?php require_once APPROOT . '/views/includes/nav_all.php'; ?>
        <!-- header section end -->

        <?php
        if (!empty($data['cus'])) :
            foreach ($data['cus'] as $cus) : extract($cus); ?>

                <!-- Profile section -->
                <div class="container row mx-auto">
                    <div class="col-12 col-lg-6">
                        <fieldset class="bg-white" style="padding: 45px; margin-top: 100px; min-width: 300px;  max-width: 550px;">
                            <form class="" id="" action="<?= URLROOT ?>/User/editProfile" method="POST">
                                <legend class="mb-5 fw-bold">Profile</legend>
                                <div class="form-group" style="font-size: 16px;">
                                    <div class="mb-5 row">
                                        <div class="col-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="firstNameInput" placeholder="First Name" value="<?= $firstname ?>" require>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lastNameInput" placeholder="Last Name" value="<?= $lastname ?>" require>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="emailInput" placeholder="example@gmail.com" value="<?= $email ?>" require>
                                    </div>
                                </div>
                                <button name="editProfile" type="submit" class="btn btn-primary w-100 mt-4 mb-4">Change</button>
                            </form>
                        </fieldset>
                    </div>
                    <div class="col-12 col-lg-6">
                        <fieldset class="bg-white" style="padding: 45px; margin-top: 100px; min-width: 300px;  max-width: 550px;">
                            <form class="" id="" action="<?= URLROOT ?>/User/editAccount" method="POST">
                                <legend class="mb-5 fw-bold">Account</legend>
                                <div class="form-group" style="font-size: 16px;">
                                    <div class="mb-5">
                                        <label class="form-label">Old Password</label>
                                        <input type="password" class="form-control" name="oldPasswordInput" placeholder="Password" required>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="passwordInput1" placeholder="Password" required>
                                    </div>
                                    <div>
                                        <label class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" name="passwordInput2" placeholder="Password" required>
                                    </div>
                                </div>
                                <button name="editAccount" type="submit" class="btn btn-primary w-100 mt-4 mb-4">Change</button>
                            </form>
                        </fieldset>
                    </div>
                </div>

        <?php endforeach;
        endif; ?>

        <!-- footer section start -->
        <?php
        require_once APPROOT . '/views/includes/footer.php';
        ?>
        <!-- footer section end -->
    </div>
</body>

</html>