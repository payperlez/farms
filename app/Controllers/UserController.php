<?php
$appForm = new AppForm();
$appForm->eduLevel();
$appForm->region();
$appForm->empStatus();
$appForm->language();
$appForm->traineeStatus();
$appForm->traineeLevel();

if ($_POST['register']) {
    if (
        !empty($_POST['fname']) &&
        !empty($_POST['age']) &&
        !empty($_POST['comm']) &&
        !empty($_POST['hhold']) &&
        !empty('dependents') &&
        !empty($_POST['marital']) &&
        !empty($_POST['empStatus'])
    ) {
        $fname = $_POST['fname'];
        echo $fname;
        die();
    }
} else {
    # code...
}
