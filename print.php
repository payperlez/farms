<?php
require_once __DIR__ . '/public/inc/Loader.php';
require_once __DIR__ . '/libs/bootstrap.php';
// Render our view
// Session::destroy();
if (null !== Session::get('print')) {
    // print_r(Session::get('print'));
    // die();
    echo $view->render('home/print.twig', [
        'print' => Session::get('print'),
    ]);
} else {
    "<script> window.location.replace('index')</script>";
}
