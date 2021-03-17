<?php
/**
 *  A class for user forms for selecting data from the db
 */
require_once 'app/DUtils/DUtils.php';
class AppForm extends DUtils
{
    // fetch educational levels
    public function eduLevel()
    {
        try {
            //code...
            $this->eduLevel = $this->query(
                'SELECT * FROM farms.edu_level'
            )->fetchAll();
            return count($this->eduLevel) > 0 ? $this->eduLevel : false;
        } catch (\Throwable $th) {
            return false;
        }
    }

    // fetch regions
    public function region()
    {
        try {
            //code...
            $this->region = $this->query(
                'SELECT * FROM farms.regions WHERE deleted = ?',
                0
            )->fetchAll();
            return count($this->region) > 0 ? $this->region : false;
        } catch (Exception $e) {
            return false;
        }
    }

    // fetch employment status
    public function empStatus()
    {
        try {
            $this->empStatus = $this->query(
                'SELECT * FROM farms.emp_status'
            )->fetchAll();
            return count($this->empStatus) > 0 ? $this->empStatus : false;
        } catch (\Throwable $th) {
            return false;
        }
    }

    // fetch employment status
    public function language()
    {
        try {
            $this->language = $this->query(
                'SELECT * FROM farms.language'
            )->fetchAll();
            return count($this->language) > 0 ? $this->language : false;
        } catch (\Throwable $th) {
            return false;
        }
    }

    // fetch training status
    public function traineeStatus()
    {
        try {
            $this->traineeStatus = $this->query(
                'SELECT * FROM farms.trainee'
            )->fetchAll();
            // $this->debug($this->traineeStatus);
            return count($this->traineeStatus) > 0
                ? $this->traineeStatus
                : false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}

?>
