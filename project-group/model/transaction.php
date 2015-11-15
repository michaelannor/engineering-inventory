<?php

/**
 * author: Michael Annor
 * date: 15th November, 2015
 * description: Class with queries to access the se_inventory_transaction table
 */

include_once ("adb.php");

class transaction extends adb {

/**
 * [[The check_out_equipment function is to add a transaction to the database after an equipment is logged out]]
 * @param [[int]] $user
 * @param [[int]] $equipment
 * @param [[date]] $date_borrowed
 * @param [[date_to_be_returned]]
 */
  function check_out_equipment($user, $equipment, $date_borrowed, $date_to_be_returned){
    $str_query = "insert into se_inventory_transaction set user_id='$user', equipment_id='$equipment',
    date_borrowed='$date_borrowed', date_to_be_returned='$date_to_be_returned' ";
    return $this->query($str_query);
  }

/**
 * [[The check_in_equipment function is to record the return of an equipment]]
 * @param [[int]] $equipment
 * @param [[date_returned]]
 */
  function check_in_equipment($equipment, $date_returned){
    # code...
  }

/**
 * [[The get_equipment_borrowed function is get the equipment borrowed by a given user]]
 * @param [[int]] $user
 */
  function get_equipment_borrowed($user){
    # code...
  }


}


?>
