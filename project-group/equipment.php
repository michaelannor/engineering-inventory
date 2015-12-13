<?php

/**
* @author Daniel Bonsu
* @version 2.0 Formatted version of PHP code that contains user functions for inventory equipment.
* 
* This class below contains functions that interface with database
* via MYSQL
*/

    include_once ("adb.php");

    class equipment extends adb
    { 

/**
* Adds user information into database
*@return $this->query: this returns the result of the query if true
*/  
        function viewEquipment()
        {
            $query = "select * from se_inventory_equipment";
            return $this->query($query);
        }

/**
* Adds user information into database
*@param $id This holds the id of the lab containing specific equipment
*@return $this->query: this returns the result of the query if true
*/  
        function viewLabs($id)
        {
        $query = "select * from se_inventory_equipment, se_inventory_labs where se_inventory_equipment.laboratory_id = se_inventory_labs.lab_id AND se_inventory_equipment.laboratory_id = '$id'";
        return $this->query($query);
        }

    }

?>

