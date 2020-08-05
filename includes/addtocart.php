<?php
require $_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php';

$text = '';
if(isset($_SESSION['log_user'])) {
    if (isset($_POST['check']) && $_POST['check'] != "" && isset($_POST['btn-buy'])) {
        $item = R::findOne('products', 'title = ?', array($_POST['check']));
        $id = $item['id'];
        $title = $item['title'];
        $price = $item['price'];
        $img = $item['image'];
        $cartArr = array(
            $title => array(
                'id' => $id,
                'title' => $title,
                'price' => $price,
                'quantity' => 1,
                'image' => $img
            ));
        if (empty($_SESSION["shop_cart"])) {
            $_SESSION["shop_cart"] = $cartArr;
            $text = "cart updated";
        } else {
            $Arr_Keys = array_keys($_SESSION["shop_cart"]);
            if (in_array($id, $Arr_Keys)) {
                $text = 'Product is already in your cart';
            } else {
                $_SESSION['shop_cart'] = array_merge($_SESSION["shop_cart"], $cartArr);
                $text = "cart updated";
            }
        }
    }
} else {
    if (isset($_POST['check']) && $_POST['check'] != "") {
        echo "<script>alert('Login or sign up to add products in a cart');</script>";
        echo "<script>window.location.href='http://shop/';</script>";
    }
}


if (isset($_POST['action']) && $_POST['action']=="remove") :
    if(!empty($_SESSION["shop_cart"])) :
        foreach($_SESSION["shop_cart"] as $key => $value) :
            if($_POST["code"] == $key) :
                unset($_SESSION["shop_cart"][$key]);
                $text = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
            endif;
            if(empty($_SESSION["shop_cart"])) :
                unset($_SESSION["shop_cart"]);
            endif;
        endforeach;
    endif;
endif;

if ( isset($_POST['change']) ){
    $_SESSION['shop_cart'][$_POST['code']]['quantity'] = $_POST['num'];
}

if(isset($_POST['doCart'])) {
    $id = microtime().$_SESSION['log_user']['id'];
    define('SECRET_KEY', '');
    $billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);
    $publicKey = '48e7qUxn9T7RyYE1MVZswX1FRSbE6iyCj2gCRwwF3Dnh5XrasNTx3BGPiMsyXQFNKQhvukniQG8RTVhYm3iPtPj6sAdFoYgQx4VgGUJcGkek3nmKJ7SJnaNvnZezfBsM51cp48NzUs36rBG4EHCC3uxRY3o5tjQLd4UHhtvVBAjoMb4tikEr7yKASSLu6';
    $params = [
        'publicKey' => $publicKey,
        'amount' => 1,
        'billId' => $id,
        'successUrl' => 'http://shop/'
    ];
    $link = $billPayments->createPaymentForm($params);
    echo "<script>window.location.href='$link';</script>";
}