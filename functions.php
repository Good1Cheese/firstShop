<?php

function empte($variable) {
    if(isset($variable))
    {
        echo $variable;
    } else {
        $variable = 'Не указано';
        echo $variable;
    }
}
function spam()
{
    if (isset($_POST['do_spam'])) :
        if (!isset($_SESSION['log_user'])) :
            echo "<script>alert('Login or sign up to subscribe');</script>";
        else :
            $user = R::dispense('spamlist');
            $user->email = $_SESSION['log_user']['email'];
            R::store($user);
        endif;
    endif;
}

function search() {
    if( isset($_GET['do_search']) ) :
        $Search = R::findOne('products', 'title LIKE :result', array( ':result' => '%'.$_GET['search_value'].'%' ));
        $link = 'http://shop/product/'.$Search['id'];
        if( $Search ) :
            echo "<script>window.location.replace('$link');</script>";
        else :
            echo "<script>window.location.href='http://shop/404';</script>";
        endif;
    endif;
}

function  rate($string) {
    switch ($string) :
        case 1 :
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star-o"></i>';
            echo '<i class="fa fa-star-o"></i>';
            echo '<i class="fa fa-star-o"></i>';
            echo '<i class="fa fa-star-o"></i>';
            break;
        case 2 :
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star-o"></i>';
            echo '<i class="fa fa-star-o"></i>';
            echo '<i class="fa fa-star-o"></i>';
            break;
        case 3 :
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star-o"></i>';
            echo '<i class="fa fa-star-o"></i>';
            break;
        case 4 :
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star-o"></i>';
            break;
        case 5 :
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            echo '<i class="fa fa-star"></i>';
            break;
    endswitch;
}
function avatar()
{
    $error = array();
    $user = $_SESSION['log_user'];
    $data = $_POST;
    if (isset($data['do_change'])) {
        $avatar = $_FILES['avatar'];
        $blackList = array('php', 'php3,', 'phtml', 'php4');
        foreach ($blackList as $item) {
            if (preg_match("/$item\$/i", $avatar['name'])) return $error[] = 'Your file have wrong permission';
        }
        if($avatar['type'] != "image/png" and $avatar['type'] != "image/jpg" and $avatar['type'] != "image/jpeg") return $error[] = 'Your file have wrong permission';
        if($avatar['size'] > 5 * 1024 * 1024) return $error[] = 'Ihres File ist zu gross';
        $uploaddir = "avatars/test";
        $name = md5(microtime()).'.'.substr($avatar['type'], strlen("image/"));
        $uploadfile = $uploaddir.$name;
        if (move_uploaded_file($avatar['tmp_name'], $uploadfile)) {
            $updates = R::load('users', $user['id']);
            $updates->image = $name;
            $updates->country = $data['country'];
            $updates->city = $data['city'];
            $updates->sex = $data['sex'];
            $updates->age = $data['age'];
            $updates->description = $data['description'];
            R::store($updates);
            echo "<script>alert('Изменения успешно сохранены!')</script>";
        } else return $error[] = 'idk how to name this error...';
    }
}

function rateReview()
{
    if (isset($_POST['do_review'])) {
        if ($_POST['rating'] == 1) return 1;
        if ($_POST['rating'] == 2) return 2;
        if ($_POST['rating'] == 3) return 3;
        if ($_POST['rating'] == 4) return 4;
        if ($_POST['rating'] == 5) return 5;
    }
}

function addReview()
{
    if (isset($_POST['do_review'])) {
        if (!isset($_SESSION['log_user'])) :
            echo "<script>alert('Login or Sign up to leave a review');</script>";
        else :
            $product = R::load('products', $_GET['id']);
            $review = R::dispense('reviews');
            $review->text = $_POST['reviewText'];
            $review->rate = rateReview();
            $review->user_id = $_SESSION['log_user']['id'];
            $product->ownReviewsList[] = $review;
            R::store($product);

        endif;
    }
}





