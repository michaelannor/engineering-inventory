<?php

/**
 * @author: Michael Annor
 * date: 15th November, 2015
 * description: ajax-action page, interfaces with javascript to process commands from the frontend
 */

  $cmd = $_REQUEST['cmd'];
  switch ($cmd) {
    case 1:
      check_out_equipment_cmd();
      break;

    case 2:
      check_in_equipment_cmd();
      break;

    case 3:
      login_cmd();
      break;

    default:
      # code...
      break;
  }

  /**
   * [[The login_cmd function is to validate and grant a user access to the system
   * when called from the view]]
   */
  function login_cmd(){
    include ("../model/user.php");
    $obj = new user();
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    if($obj->login($user, $pass)){
      $row = $obj->fetch();
      // echos $row;
      if ($row['user_name'] == false){
        echo '{"result":0,"message": "wrong login credentials."}';
      }else if ($row['user_name'] == true) {
        //generate the JSON message to echo to the browser
          echo '{"result":1,"username":';	//start of json object
          echo json_encode($row['user_name']);			//convert the result array to json object
          echo ',"usergroup":';	//start of json object
          echo json_encode($row['user_group']);			//convert the result array to json object
          echo "}";							//end of json array and object
      }
    }
  }

  /**
   * [[The check_out_equipment function is to add a transaction to the database after an equipment is logged out, runs
   * when called from the view]]
   */
  function check_out_equipment_cmd(){
    include ("../model/transaction.php");
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
   * [[The check_in_equipment_cmd function is to add a transaction to the database after an equipment is logged back in, runs
   * when called from the view]]
   */
  function check_in_equipment_cmd(){
    include ("../model/transaction.php");
    $obj = new transaction();
    $equipment = $_REQUEST['equipment'];
    $date_returned = $_REQUEST['return'];

    if(verify_equipment_helper($equipment)){
        if($obj->check_in_equipment($equipment, $date_returned)){
          echo '{"result":1,"message": "checked in successfully"}';
        }
        else{
          echo '{"result":0,"message": "transaction not added."}';
        }
      }
    }


  /**
   * [[The verify_equipment_helper is a helper function to verify that an equipment exists before
   * any transactions can be performed on it]]
   * @param [[int]] $equipment
   */
  function verify_equipment_helper($equipment){
    include ("../model/equipment.php");
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
    include ("../model/user.php");
    $obj = new user();

    if($obj->verify_user($user)){
      return true;
    }
    else{
      return false;
    }
  }

?>
