<?php
    /**
     *  A class for user forms for selecting data from the db
     */
    require_once('app/DUtils/DUtils.php');
    class AppForm extends DUtils {
        
        public function eduLevel(){
            try {
                //code...
                $this->eduLevel = $this->query("SELECT * FROM farms.edu_level")->fetchAll();
                return (count($this->eduLevel) > 0) ? $this->eduLevel: false;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
    

?>