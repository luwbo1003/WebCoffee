<?php
class Manage extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->CategoryModel = $this->model('CategoryModel');
        $this->DescriptionModel = $this->model('DescriptionModel');
        $this->ImageModel = $this->model('ImageModel');
        $this->UserModel = $this->model('UserModel');
        $this->CustomerModel = $this->model('CustomerModel');
        $this->StaffModel = $this->model('StaffModel');
    }

    public function index()
    {
        if ($_SESSION['user_type'] == 0) {
            header('location:' . URLROOT . '/Manage/product');
        }
    }

    public function showEdit($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editStaff'])) {
                $emp = $this->StaffModel->getStaffByUserId($id);
                $user = $this->UserModel->getUserById($id);
                $this->view('editpage', ['emp' => $emp, 'user' => $user]);
            } else if (isset($_POST['editProduct'])) {
                $prod = $this->ProductModel->getProduct($id);
                $this->view('editpage', ['prod' => $prod]);
            }
        }
    }
    

    // Product Management

    public function product()
    {
        if ($_SESSION['user_type'] == 0) {
            $prod = $this->ProductModel->getProductList();
            $category_name = array();
            $image = array();
            $category_list = $this->CategoryModel->getCategoryList();
            foreach ($prod as $value) {
                $cate = $this->CategoryModel->getCategory($value['category_id']);
                $img = $this->ImageModel->getImage($value['pro_image_id'])[0];
                array_push($image, $img);
                array_push($category_name, $cate);
            }

            $this->view('m_product', ['prod' => $prod, 'category' => $category_name, 'image' => $image, 'category_list' => $category_list]);
        }
    }

    public function addProduct()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addProduct'])) { //????
                $pro_name = $_POST['pro_name'];
                $pro_price = $_POST['pro_price'];
                $pro_quantity = $_POST['pro_quantity'];
                $category_id = $_POST['category'];

                $brand = $_POST['brand'];
                $item = $_POST['item'];
                $flavor = $_POST['flavor'];
                $caffein = $_POST['caffein'];
                $roast = $_POST['roast'];

                $prodResult = $this->ProductModel->addProduct($pro_name, $pro_quantity, $pro_price, $category_id);
                if ($prodResult) {
                    $this->DescriptionModel->addDes($brand,$item,$flavor,$caffein,$roast);
                    $pro_id = $this->ProductModel->getProductId();
                    if ($pro_id < 10) {
                        $pro_img_id = "img0" . $pro_id;
                    } else {
                        $pro_img_id = "img" . $pro_id;
                    }
                    $this->ProductModel->addImageIdProduct($pro_id, $pro_img_id);
                    $this->ProductModel->addDesIdProduct($pro_id,$pro_id);
                    $this->uploadPicture($pro_img_id);
                    header('location:' . URLROOT . '/Manage/product');
                }
            }
        }
    }

    public function editProduct($id)
    {
        if (isset($_POST['editProfile'])) {
            $userResult = $this->UserModel->changeEmail($id, $_POST['emailInput']);
            if ($userResult) {
                $customerResult = $this->CustomerModel->editCustomer($_SESSION['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput']);
                if ($customerResult) {
                    header('location:' . URLROOT . '/User/profile');
                }
            }
        }
    }

    public function deleteProduct($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteProduct'])) {
                $this->ProductModel->deleteProduct($id);
                header('location:' . URLROOT . '/Manage/product');
            }
        }
    }

    public function uploadPicture($pro_img_id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addProduct'])) {
                $countfiles = count($_FILES['fileToUpload']['name']);

                for ($i = 0; $i < $countfiles; $i++) {
                    $filename = $_FILES['fileToUpload']['name'][$i];
                    $s = explode(".", $filename);
                    $this->ImageModel->addImage($pro_img_id, $pro_img_id . "-" . ($i + 1) . "." . $s[1]);
                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i], APPROOT . "/public/image/" . $pro_img_id . "-" . ($i + 1) . "." . $s[1]);
                }
            }
        }
    }

    // Category Management

    public function category()
    {
        if ($_SESSION['user_type'] == 0) {
            $category_list = $this->CategoryModel->getCategoryList();
            $count_prod = array();
            foreach ($category_list as $value) {
                $id = $value['cate_id'];
                $count = $this->CategoryModel->countProdPerCate($id);
                array_push($count_prod, $count);
            }
            // echo var_dump($count_prod[0][0]['COUNT(category_id)']);
            $this->view('m_category', ['category_list' => $category_list, 'count_prod' => $count_prod]);
        }
    }

    public function addCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addCategory'])) {
                $name = $_POST['category'];

                $this->CategoryModel->addCategory($name);
                header('location:' . URLROOT . '/Manage/category');
            }
        }
    }

    public function deleteCategory($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteCategory'])) {
                $this->CategoryModel->deleteCategory($id);
                header('location:' . URLROOT . '/Manage/category');
            }
        }
    }

    public function searchByCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['category'])) {
                if ($_POST['category'] == "all") {
                    header('location:' . URLROOT . '/Manage/product');
                } else {
                    $prod = $this->ProductModel->getProductByCategory($_POST['category']);
                    $cate_name = array();
                    $image = array();
                    $category_list = $this->CategoryModel->getCategoryList();
                    foreach ($prod as $value) {
                        $cate = $this->CategoryModel->getCategory($this->ProductModel->getCategoryId($value['pro_id']));
                        $img = $this->ImageModel->getImage($this->ProductModel->getImageId($value['pro_id']))[0];
                        array_push($image, $img);
                        array_push($cate_name, $cate);
                    }

                    $this->view('m_product', ['prod' => $prod, 'category' => $cate_name, 'image' => $image, 'category_list' => $category_list]);
                }
            }
        }
    }

    // Staff Management

    public function Staff()
    {
        if ($_SESSION['user_type'] == 0) {
            $emp = $this->StaffModel->getEmpList();
            $this->view("m_staff", ['emp' => $emp]);
        }
    }

    public function validateEmail()
    {
        //Check if email exist
        $user = $this->UserModel->getUserList();
        foreach ($user as $value) {
            if ($value['email'] == $_POST['emailInput']) {
                return true;
            }
        }
    }

    public function validatePassword()
    {
        //Check if password is correct
        if ($_POST['passwordInput1'] != $_POST['passwordInput2']) {
            return true;
        }
    }

    public function addStaff()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addStaff'])) {
                if ($this->validateEmail()) {
                } else if ($this->validatePassword()) {
                } else {
                    $userResult = $this->UserModel->addUser($_POST['emailInput'], md5($_POST['passwordInput1']), 0);
                    if ($userResult) {
                        $user_id = $this->UserModel->getUserId($_POST['emailInput'])[0]['user_id'];
                        $StaffResult = $this->StaffModel->addStaff($user_id, $_POST['firstNameInput'], $_POST['lastNameInput']);
                        if ($StaffResult) {
                            header('location:' . URLROOT . '/Manage/Staff');
                        }
                    }
                }
            }
        }
    }

    public function editProfile($id)
    {
        if (isset($_POST['editProfile'])) {
            $userResult = $this->UserModel->changeEmail($id, $_POST['emailInput']);
            if ($userResult) {
                $customerResult = $this->CustomerModel->editCustomer($_SESSION['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput'], $_POST['birthdayInput'], $_POST['phoneInput']);
                if ($customerResult) {
                    header('location:' . URLROOT . '/User/profile');
                }
            }
        }
    }

    public function editAccount($id)
    {
        if (isset($_POST['editAccount'])) {
            $userResult = $this->UserModel->changePassword($_SESSION['user_id'], md5($_POST['passwordInput1']));
            if ($userResult) {
                header('location:' . URLROOT . '/User/profile');
            }
        }
    }

    public function deleteStaff($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteStaff'])) {
                $this->StaffModel->deleteStaff($id);
                $this->UserModel->deleteUser($id);
                header('location:' . URLROOT . '/Manage/Staff');
            }
        }
    }

    // Customer Management
    public function customer()
    {
        if ($_SESSION['user_type'] == 0) {
            $cus = $this->CustomerModel->getCustomerList();
            $this->view("m_customer", ['cus' => $cus]);
        }
    }

    public function deleteCustomer($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteCustomer'])) {
                $this->CustomerModel->deleteCustomer($id);
                $this->UserModel->deleteUser($id);
                header('location:' . URLROOT . '/Manage/customer');
            }
        }
    }
}
