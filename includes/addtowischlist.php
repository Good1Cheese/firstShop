<?php

if(isset($_POST['do_wish']) and isset($_POST['check']) and $_POST['check'] != "" ) {
    if(isset($_SESSION['log_user'])) {
        $item = R::findOne('products', 'title = ?', [$_POST['check']]);
        $title = $item['title'];
        $id = $item['id'];
        $wishList = array(
            $title => array(
                'id' => $id
            )
        );
        if(empty($_SESSION['wish_list']))
        {
            $_SESSION['wish_list'] = $wishList;
            echo "<script>alert('Your wish list updated');</script>";
            echo "<script>window.location.href='http://shop/';</script>";
        } else {
                $key = array_keys($_SESSION['wish_list']);
                if (in_array($id, $key)) {
                    echo "<script>alert('This product is already in your wish list');</script>";
                    echo "<script>window.location.href='http://shop/';</script>";
                } else {
                    $_SESSION['wish_list'] = array_merge($_SESSION['wish_list'], $wishList);
                    echo "<script>alert('Your wish list updated');</script>";
                    echo "<script>window.location.href='http://shop/';</script>";
                }

        }
    } else {
        echo "<script>alert('Login or sign up to edit wish list');</script>";
        echo "<script>window.location.href='http://shop/';</script>";
    }
}

if (isset($_POST['action']) && $_POST['action']== "removeWish") :
    if(!empty($_SESSION["wish_list"])) :
        foreach($_SESSION["wish_list"] as $key => $value) :
            if($_POST["checkWish"] == $key) :
                unset($_SESSION["wish_list"][$key]);
                echo "<script>alert('Your wish list updated');</script>";
                echo "<script>window.location.href='http://shop/';</script>";
            endif;
            if(empty($_SESSION["wish_list"])) :
                unset($_SESSION["wish_list"]);
            endif;
        endforeach;
    endif;
endif;
