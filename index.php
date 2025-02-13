<?php
require_once __DIR__ . '/public/inc/Loader.php';
require_once __DIR__ . '/libs/bootstrap.php';
// Render our view
// Session::destroy();
echo $view->render('home/index.twig', [
    'message' => $message,
    'eduLevel' => $appForm->eduLevel,
    'regions' => $appForm->region,
    'emps' => $appForm->empStatus,
    'language' => $appForm->language,
    'trainees' => $appForm->traineeStatus,
    'trainLevels' => $appForm->traineeLevel,
]);
