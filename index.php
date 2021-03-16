<?php
require_once __DIR__ . '/public/inc/Loader.php';
require_once __DIR__ . '/libs/bootstrap.php';
// Render our view

echo $view->render('home/index.twig', [
    'message' => $message,
    'eduLevel' => $appForm->eduLevel,
    'regions' => $appForm->region,
    'emps' => $appForm->empStatus,
]);
