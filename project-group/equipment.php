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

function viewDescription($id)
{
$query = "select equipment_description from se_inventory_equipment where
equipment_id = '$id'";
$this->query($query);
return $this->fetch();
}

}

?>

