<?php

$data = $_REQUEST['pn'];
$explode_data = explode('/', $data);
$page = $explode_data[0];

$base_url = 'http://localhost:85/';
//echo $base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/bmm-website-new/bmm-website-new/';

if ($page == "") {
    $page = 'home';
}

if ($page == 'blog') {
    $blog_cat_id = $explode_data[1];
    $blog_cat_name = $explode_data[2];
        include_once './include/header.php';
        include_once "blog.php";
        include './include/footer.php';
}


if ($page !== 'blog') {

    switch ($page) {
        case 'home':
        case 'about':
            $page_title = 'Book MY Makeup';
            break;
        default:
            break;
    }
    
    if ($page == 'salon') {
        include_once "./salon/{$explode_data[1]}.php";
    } else if ($page == 'pro') {
        include_once './include/header.php';
        include_once "./pro/{$explode_data[1]}.php";
        include './include/footer.php';
    } else if ($page == 'user') {
        include_once './include/header.php';
        include_once "./user/{$explode_data[1]}.php";
        include './include/footer.php';
    } else {
        include_once './include/header.php';
        include_once "{$page}.php";
        include './include/footer.php';
    }
    
}