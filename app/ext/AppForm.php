<?php
    /**
     *  A class for user forms for selecting data from the db
     */
    require_once('app/DUtils/DUtils.php');
    class AppForm extends DUtils {
        
        public function eduLevel(){
            try {
                //code...
                $this->eduLevel = $this->query("SELECT * FROM farmer.edu_level")->fetchAll();
                $this->debug($this->eduLevel);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
    

?>