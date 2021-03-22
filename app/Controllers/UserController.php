<?php
$appForm = new AppForm();
$farmer = new Farmer();
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
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $comm = $_POST['comm'];
        $region = $_POST['region'];
        $hhold = $_POST['hhold'];
        $dependents = $_POST['dependents'];
        $marital = $_POST['marital'];
        $empStatus = $_POST['empStatus'];
        $eduLevel = $_POST['eduLevel'];
        $yrsfarm = $_POST['yrsfarm'];
        $srcincome = $_POST['srcincome'];
        $lang = $_POST['lang'];
        $nofarms = $_POST['nofarms'];
        $traineeStatus = $_POST['traineeStatus'];
        $trainLevel = $_POST['trainLevel'];
        $phone = $_POST['phone'];
        $momo = $_POST['momo'];
        $buycompany = $_POST['buycompany'];
        $farmer->registerFarmer(
            $fname,
            $age,
            $gender,
            $comm,
            $region,
            $hhold,
            $dependents,
            $marital,
            $empStatus,
            $eduLevel,
            $yrsfarm,
            $srcincome,
            $lang,
            $nofarms,
            $traineeStatus,
            $trainLevel,
            $phone,
            $momo,
            $buycompany
        );
    }
} else {
    # code...
}
