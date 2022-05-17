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
    $blog_id = $explode_data[1];
    if($blog_id==''){
        include_once './include/header.php';
        include_once "blog-post.php";
        include './include/footer.php';
    } else {
        include_once './include/header.php';
        include_once "blog-post.php";
        include './include/footer.php';
    }
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



    include_once './include/header.php';
    include_once "{$page}.php";
    include './include/footer.php';
}