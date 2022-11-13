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
        }
    }

    public function showEdit($id)
    { {
            if ($_SESSION['user_type'] == 0) {
                if (isset($_POST['editEmployee'])) {
                    $emp = $this->StaffModel->getStaffByUserId($id);
                    $this->view('m_editpage', ['emp' => $emp]);
                } else if (isset($_POST['editProduct'])) {
                    $prod = $this->ProductModel->getProduct($id);
                    $des = $this->DescriptionModel->getDes($id);
                    $category_list = $this->CategoryModel->getCategoryList();
                    $this->view('m_editpage', ['prod' => $prod, 'category_list' => $category_list, 'des' => $des]);
                } else if (isset($_POST['editCategory'])) {
                    $cate = $this->CategoryModel->getCategory($id);
                    $this->view('m_editpage', ['cate' => $cate]);
                } else if (isset($_POST['editCustomer'])) {
                    $cus = $this->CustomerModel->getCustomerByUserId($id);
                    $this->view('m_editpage', ['cus' => $cus]);
                }
            }
        }
    }


    // Product Management

    public function product()
    {
        if ($_SESSION['user_type'] == 0) {
            $category_list = $this->CategoryModel->getCategoryList();
            $number = 1;
            $this->view('m_product', ['category_list' => $category_list, 'number' => $number]);
        }
    }

    public function search($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $cateArray = array();

        $cateList = array();
        if ($_POST['category'] == 'all') {
            $cateList = $this->CategoryModel->getCategoryIdList();
        } else {
            $cateArray['cate_id'] = $_POST['category'];
            array_push($cateList, $cateArray);
        }

        $from = ($number - 1) * 6;
        $page = $this->ProductModel->countPageProductAdmin($keyword, $cateList);

        $category_name = array();
        $prodList = $this->ProductModel->searchProductAdmin($keyword, $cateList, $from);
        $image = array();
        if (isset($prodList)) {
            foreach ($prodList as $value) {
                $cate = $this->CategoryModel->getCategory($value['category_id']);
                array_push($category_name, $cate);
            }
            foreach ($prodList as $value) {
                $img = $this->ImageModel->getImage($value['pro_image_id'])[0];
                array_push($image, $img);
            }
            $this->view('m_product_sub', ['prod' => $prodList, 'page' => $page, 'image' => $image, 'category' => $category_name, 'number' => $number]);
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
                    $this->DescriptionModel->addDes($brand, $item, $flavor, $caffein, $roast);
                    $pro_id = $this->ProductModel->getProductId();
                    if ($pro_id < 10) {
                        $pro_img_id = "img0" . $pro_id;
                    } else {
                        $pro_img_id = "img" . $pro_id;
                    }
                    $this->ProductModel->addImageIdProduct($pro_id, $pro_img_id);
                    $this->ProductModel->addDesIdProduct($pro_id, $pro_id);
                    $this->uploadPicture($pro_img_id);
                    header('location:' . URLROOT . '/Manage/product');
                }
            }
        }
    }

    public function editProduct()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editProduct'])) {

                switch ($_POST['editProduct']) {
                    case 'edit':
                        $this->ProductModel->editProduct($_POST['pro_id'], $_POST['pro_name'], $_POST['pro_quantity'], $_POST['category'], $_POST['pro_price']);
                        $this->DescriptionModel->editDescription($_POST['pro_id'], $_POST['brand'], $_POST['form'], $_POST['flavor'], $_POST['caffein'], $_POST['roast']);
                        header('location:' . URLROOT . '/Manage/product');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/product');
                        break;

                    default:
                        break;
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
            $number=1;
            $this->view('m_category', ['number' => $number]);
        }
    }

    public function searchCategory($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $from = ($number - 1) * 6;
        $page = $this->CategoryModel->countPageCategoryAdmin($keyword);

        $category_list = $this->CategoryModel->searchCategoryAdmin($keyword, $from);
        $count_prod = array();
        if (isset($category_list)) {
            foreach ($category_list as $value) {
                $id = $value['cate_id'];
                $count = $this->CategoryModel->countProdPerCate($id);
                array_push($count_prod, $count);
            }

            $this->view('m_category_sub', ['count_prod' => $count_prod, 'category_list' => $category_list, 'number' => $number, 'page' => $page]);
        }
    }

    public function addCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addCategory'])) {
                $name = $_POST['category'];
                $check = $this->CategoryModel->duplicateCategory($name);
                if ($name == $check) {
                    $this->CategoryModel->editStatusCategory($name);
                    header('location:' . URLROOT . '/Manage/category');
                } else {
                    $this->CategoryModel->addCategory($name);
                    header('location:' . URLROOT . '/Manage/category');
                }
            }
        }
    }

    public function editCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editCategory'])) {
                switch ($_POST['editCategory']) {
                    case 'edit':
                        $this->CategoryModel->editCategory($_POST['cate_id'], $_POST['cate_name']);
                        header('location:' . URLROOT . '/Manage/category');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/category');
                        break;

                    default:
                        break;
                }
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
                } else {
                    $prod = $this->ProductModel->getProductByCategory($_POST['category']);
                    $cate_name = array();
                    $image = array();
                    $category_list = $this->CategoryModel->getCategoryList();
                    foreach ($prod as $value) {
                        $cate = $this->CategoryModel->getCategory($value['category_id']);
                        $img = $this->ImageModel->getImage($value['pro_image_id'])[0];
                        array_push($image, $img);
                        array_push($cate_name, $cate);
                    }

                    $this->view('m_product', ['prod' => $prod, 'category' => $cate_name, 'image' => $image, 'category_list' => $category_list]);
                }
            }
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Staff Management

    public function Staff()
    {
        if ($_SESSION['user_type'] == 0) {
            $number =1;
            $this->view("m_staff", ['number' => $number]);
        }
    }

    public function searchStaff($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $from = ($number - 1) * 6;
        $page = $this->StaffModel->countPageStaffAdmin($keyword);

        $emp = $this->StaffModel->searchStaffAdmin($keyword, $from);
        if (isset($emp)) {
            $this->view('m_staff_sub', ['emp' => $emp, 'number' => $number, 'page' => $page]);
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

    public function editProfile()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editProfile'])) {
                switch ($_POST['editProfile']) {
                    case 'edit':
                        $this->UserModel->changeEmail($_POST['user_id'], $_POST['emailInput']);
                        $this->StaffModel->editStaff($_POST['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput']);
                        header('location:' . URLROOT . '/Manage/Staff');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/Staff');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function editAccount()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editAccount'])) {
                switch ($_POST['editAccount']) {
                    case 'edit':
                        if ($this->validatePassword()) {
                            echo "unmatch password";
                        } else {
                            $this->UserModel->changePassword($_POST['user_id'], md5($_POST['passwordInput1']));
                            header('location:' . URLROOT . '/Manage/Staff');
                        }
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/Staff');
                        break;

                    default:
                        break;
                }
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
            $number=1;
            $this->view("m_customer", ['number' => $number]);
        }
    }

    public function searchCustomer($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $from = ($number - 1) * 6;
        $page = $this->CustomerModel->countPageCustomerAdmin($keyword);

        $cus = $this->CustomerModel->searchCustomerAdmin($keyword, $from);
        if (isset($cus)) {
            $this->view('m_customer_sub', ['cus' => $cus, 'number' => $number, 'page' => $page]);
        }
    }

    public function editCustomer()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editCustomer'])) {
                switch ($_POST['editCustomer']) {
                    case 'edit':
                        $this->CustomerModel->editCustomer($_POST['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput']);
                        $this->UserModel->changeEmail($_POST['user_id'], $_POST['emailInput']);
                        header('location:' . URLROOT . '/Manage/customer');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/customer');
                        break;

                    default:
                        break;
                }
            }
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
