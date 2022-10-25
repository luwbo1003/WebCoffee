<?php
class Cart extends Controller
{

    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->CategoryModel = $this->model('CategoryModel');
        $this->ImageModel = $this->model('ImageModel');
    }

    function addProductToCart($pro_id)
    {
        $prod = $this->ProductModel->getProduct($pro_id);
        $image = $this->ImageModel->getImage($this->ProductModel->getImageId($pro_id));

        if (isset($_POST['addToCart'])) {
            $subtotal = $_POST['pro_quantity'] * $prod[0]['pro_price'];

            $product = array(
                "pro_id" => $prod[0]['pro_id'], "pro_name" => $prod[0]['pro_name'], "pro_img" => $image[0]['img_link'], "pro_price" => $prod[0]['pro_price'],
                "pro_quantity_max" => $prod[0]['pro_quantity'], "pro_quantity_cart" => $_POST['pro_quantity'], "subtotal" => $subtotal
            );

            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                if (!array_key_exists($product["pro_id"], $cart)) {
                    $cart[$product["pro_id"]] = $product; //key lay theo id san pham
                } else {
                    $temp = $cart[$product["pro_id"]]['pro_quantity_cart'] + $product['pro_quantity_cart'];
                    if ($temp > $product['pro_quantity_max']) {
                        $cart[$product["pro_id"]]['pro_quantity_cart'] = $product['pro_quantity_max']; //dua ve max neu du
                        $cart[$product["pro_id"]]['subtotal'] = $cart[$product["pro_id"]]['pro_quantity_cart'] * $cart[$product['pro_id']]['pro_price'];
                    } else {
                        $cart[$product["pro_id"]]['pro_quantity_cart'] = $temp;
                        $cart[$product["pro_id"]]['subtotal'] = $cart[$product["pro_id"]]['pro_quantity_cart'] * $cart[$product['pro_id']]['pro_price'];
                    }
                }
                $_SESSION['cart'] = $cart;
                // $this->createSubtotal();
            } else {
                $cart[$product["pro_id"]] = $product;
                $_SESSION['cart'] = $cart;
                $this->createSubtotal();
            }
            $this->createSubtotal();
            header('location:' . URLROOT . '/Home/shopping_cart');
        }
    }

    public function actionCart()
    {
        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'Delete':
                    $this->deleteProduct($_POST['pro_id']);
                    header('location:' . URLROOT . '/Home/shopping_cart');
                    break;

                case 'Empty cart':
                    $this->emptyCart();
                    header('location:' . URLROOT . '/Home/shopping_cart');
                    break;

                case 'Update cart':
                    $this->updateProduct($_POST['pro_id'], $_POST['pro_quantity_up']);
                    header('location:' . URLROOT . '/Home/shopping_cart');
                    break;

                default:
                    break;
            }
        }
    }

    function deleteProduct($key)
    {
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                unset($cart[$key[$i]]);
            }
            $_SESSION['cart'] = $cart;
            $this->createSubtotal();
            // header('location:' . URLROOT . '/Home/shopping_cart');
        }
    }

    function updateProduct($id, $quan)
    {
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                // echo $cart[$id[$i]]['pro_quantity_cart'];
                $cart[$id[$i]]['pro_quantity_cart'] =  $quan[$i];
                $cart[$id[$i]]['subtotal'] = $cart[$id[$i]]['pro_quantity_cart'] * $cart[$id[$i]]['pro_price'];
            }
            $_SESSION['cart'] = $cart;
            $this->createSubtotal();
        }
    }

    function checkoutCart($key)
    {
        $sum = 0;
        $cart = $_SESSION['cart'];
        foreach ($cart as $v)
            $sum += $v[$key]['pro_quantity'] * $v[$key]['pro_price'];
        return $sum;
    }

    function emptyCart()
    {
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
    }

    function createSubtotal()
    {
        if (isset($_SESSION['cart'])) {
            $subtotal = 0;
            foreach ($_SESSION['cart'] as $value) {
                $subtotal += $value['subtotal'];
            }
            $_SESSION['total'] = $subtotal;
        }
    }
}
