<?php

if(isset($_POST['do_compare'])) {
    if (empty($_SESSION['compare_list_1'])) :
        if (!isset($_SESSION['log_user'])) {
            echo "<script>alert('Login or Sign up to do compare');</script>";
            echo "<script>window.location.href='http://shop/';</script>";
        } else {
            $title = $_POST['check'];
            $some = R::findOne('products', 'title = ?', [$title]);
            $compareArr = array(
                $title => array(
                    'id' => $some['id'],
                    'title' => $some['title'],
                    'price' => $some['price'],
                    'img' => $some['image']
                )
            );
            if (empty($_SESSION['compare_list_1'])) {
                $_SESSION['compare_list_1'] = $compareArr;
            } else {
                $sear = array_keys($_SESSION['compare_list_1']);
                if (in_array($title, $_SESSION['compare_list_1'])) {
                    echo "<script>alert('This item is already in your compare list');</script>";
                    echo "<script>window.location.href='http://shop/';</script>";
                } else {
                    $_SESSION['compare_list_1'] = $compareArr;
                    echo "<script>alert('Product added');</script>";
                    echo "<script>window.location.href='http://shop/';</script>";
                }
            }
        }
    elseif( ! empty($_SESSION['compare_list_2']) and ! empty($_SESSION['compare_list_1']) ) :
        echo "<script>alert('Your compare list is full');</script>";
        echo "<script>window.location.href='http://shop/';</script>";
    else :
        if (isset($_POST['do_compare'])) {
            if (!isset($_SESSION['log_user'])) {
                echo "<script>alert('Login or Sign up to do compare');</script>";
            } else {
                $title = $_POST['check'];
                $some = R::findOne('products', 'title = ?', [$title]);
                $compareArr = array(
                    $title => array(
                        'id' => $some['id'],
                        'title' => $some['title'],
                        'price' => $some['price'],
                        'img' => $some['image']
                    )
                );
                if (empty($_SESSION['compare_list_2'])) {
                    $check = array_keys($_SESSION['compare_list_1']);
                    if(in_array($title, $check)) {
                        echo "<script>alert('This item is already in your compare list');</script>";
                        echo "<script>window.location.href='http://shop/';</script>";
                    } else {
                        $_SESSION['compare_list_2'] = $compareArr;
                    }
                } else {
                    $sear = array_keys($_SESSION['compare_list_2']);
                    if (in_array($title, $_SESSION['compare_list_2'])) {
                        echo "<script>alert('This item is already in your compare list');</script>";
                        echo "<script>window.location.href='http://shop/';</script>";
                    } else {
                        $_SESSION['compare_list_2'] = $compareArr;
                        echo "<script>alert('Product added');</script>";
                        echo "<script>window.location.href='http://shop/';</script>";
                    }
                }
            }
        }
    endif;
}
 if(isset($_POST['ComplainRem'])) {
     if( $_POST['check'] == 1 ) {
         unset($_SESSION['compare_list_1']);
     } else {
         unset($_SESSION['compare_list_2']);
     }
 }
