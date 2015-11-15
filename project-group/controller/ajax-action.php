<?php

/**
 * author:
 * date:
 * description:
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

    if($obj->check_out_equipment($user, $equipment, $borrowed, $to_return)){
      echo '{"result":1,"message": "checked out successfully"}';
    }
    else{
      echo '{"result":0,"message": "transaction not added."}';
    }
  }

?>
