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
            $this->farmerId($fname, $comm, $region);
            $farmerId = $this->farmerId;
            $this->farmId($farmerId, $nofarms);
            $farmId = json_encode($this->farmId);
            // echo $farmId;
            // die();
            $this->register = $this->query(
                'INSERT INTO farms.farmers(fullname, age, gender, community, region, household_status, no_dependents, marital_status, employment_status, educational_level, yrs_farming, source_income, lang, no_farms, trainee_status, level_training, phone, momo, farmer_id, farm_id, buying_company ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?)',
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
                $farmerId,
                $farmId,
                $buycompany
            );
            if ($this->register) {
                $this->alert =
                    '<script> alert(" Inserted successfully ")</script>';
            }
        } catch (Exception $e) {
            //throw $th;
        }
    }

    // farmer id generator
    public function farmerId($fname, $comm, $region)
    {
        try {
            $name = substr($fname, 0, 3);
            $comm = substr($comm, 0, 3);
            $num = substr(str_shuffle('01234567899876543210'), 0, 4);
            return $this->farmerId = strtoupper(
                $name . '/' . $comm . '/' . $region . '/' . $num
            );
        } catch (\Throwable $th) {
            return false;
        }
    }

    // farms id generato
    public function farmId($farmerId, $nofarms)
    {
        try {
            for ($i = 1; $i <= $nofarms; $i++) {
                $this->farmId[] = ['farm' . $i => $farmerId . '/' . $i];
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
}
