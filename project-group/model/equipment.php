<?php

/**
 * author: Michael Annor
 * date: 15th November, 2015
 * description: Class with queries to access the se_inventory_equipment table
 */

include ("adb.php");

class equipment extends adb {

/**
 * [[The verify_equipment function checks if an equipment exists]]
 * @param [[int]] $equipment
 */
  function verify_equipment($equipment){
    $str_query = "select equipment_id from se_inventory_equipment where equipment_id='$equipment'";
    if(!$this->query($str_query)){
      return false;
    }
    else {
      return true;
    }
  }


}


?>
