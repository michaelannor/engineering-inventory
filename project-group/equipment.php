<?php

/**
* @author Daniel Bonsu
* @version 1.1 Formatted version of PHP code that contains user functions for inventory equipment */

include_once ("adb.php");

  class equipment extends adb
  { 

/**
* Returns all equipment from database
*@return $this->fetch: this returns the result of the query if true
*/ 
  function viewEquipment()
  {
    $query = "select * from se_inventory_equipment";
    return$this->query($query);
  }


function viewLabs($id)
{
  $query = "select * from se_inventory_equipment, se_inventory_labs where se_inventory_equipment.laboratory_id = se_inventory_labs.lab_id AND se_inventory_equipment.laboratory_id = '$id'";
    return$this->query($query);
}
}

?>

