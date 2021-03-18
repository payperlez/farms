<?php

class Farmer extends DUtils
{
    public function registerFarmer(
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
    ) {
        try {
            $this->register = $this->query(
                'INSERT INTO farms.farmers(fullname, age, gender, community, region, household_status, no_dependents, marital_status, employment_status, educational_level, yrs_farming, source_income, lang, no_farms, trainee_status, level_training, phone, momo, buying_company ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?)',
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
        } catch (Exception $e) {
            //throw $th;
        }
    }
}
