<?php

/**
 * author: Michael Annor
 * date: 15th November, 2015
 * description: ajax-action page, interfaces with javascript to process commands from the frontend
 */

  $cmd = $_REQUEST['cmd'];
  switch ($cmd) {
    case 1:
      check_out_equipment_cmd();
      break;

    default:
      # code...
      break;
  }

  /**
   * [[The check_out_equipment function is to add a transaction to the database after an equipment is logged out, runs
   * when called from the view]]
   */
  function check_out_equipment_cmd(){
    include ("transaction.php");
    $obj = new transaction();
    $user = $_REQUEST['user'];
    $equipment = $_REQUEST['equipment'];
    $borrowed = $_REQUEST['borrowed'];
    $to_return = $_REQUEST['return'];

    if(verify_equipment_helper($equipment)){
      if(verify_user_helper($user)){
        if($obj->check_out_equipment($user, $equipment, $borrowed, $to_return)){
          echo '{"result":1,"message": "checked out successfully"}';
        }
        else{
          echo '{"result":0,"message": "transaction not added."}';
        }
      }
    }
  }

  /**
   * [[The verify_equipment_helper is a helper function to verify that an equipment exists before
   * any transactions can be performed on it]]
   * @param [[int]] $equipment
   */
  function verify_equipment_helper($equipment){
    include ("equipment.php");
    $obj = new equipment();

    if($obj->verify_equipment($equipment)){
      return true;
    }
    else{
      return false;
    }
  }

  /**
   * [[The verify_user_helper is a helper function to verify that a user exists before
   * any transactions can be performed on it]]
   * @param [[int]] $user
   */
  function verify_user_helper($user){
    include ("user.php");
    $obj = new user();

    if($obj->verify_user($user)){
      return true;
    }
    else{
      return false;
    }
  }

?>
