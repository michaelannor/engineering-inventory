<?php

/**
 * @author Michael Annor & Nura Abdul-Rahman
 * date: 15th November, 2015
 * description:ajax-action page, interfaces with javascript to process commands from the frontend
 */
    if(!isset($_REQUEST['cmd'])){
	    echo '{"result":0,message:"unknown command"}';
	    exit();
    }
	$cmd = $_REQUEST['cmd'];
    /**
	 * @method switch($cmd) it has cases of different commands
	 *@param integer $cmd an number that represents different switch cases
	 */
	switch ($cmd) {
        case 1:
        check_out_equipment_cmd();
        break;
        case 2:
	    add_equipment_cmd();
	    break;
        default:
        echo '{"result":0,message:"unknown command"}';
        break;
    }

  /**
   * @method check_out_equipment() adds a transaction to the database after an equipment is logged out, runs
   * when called from the view
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
   * @method verify_equipment_helper($equipment)  a helper function to verify that an equipment exists before
   * any transactions can be performed on it
   * @param integer $equipment equipment id
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
   * @method verify_user_helper()  a helper function to verify that a user exists before
   * any transactions can be performed on it
   * @param integer $user id
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
	/**
	 *@method add_equipment_cmd() a command for checking if an equipment is successfully added or not
	 */
	
    function add_equipment_cmd(){
	    if(isset($_REQUEST['nm'])){
	
		    echo '{"result":0,"message": "add did not work."}';
	    }
	    include_once("../model/equipmentfunctions.php");
	    $obj=new equipmentfunctions();
	    $name=$_REQUEST['nm'];
	    $id=$_REQUEST['tp'];
	    $manufacturer=$_REQUEST['dc'];
	    $supplier=$_REQUEST['pr'];
	    $lab_id=$_REQUEST['lb'];
		$purchase_date=$_REQUEST['pd'];
	    $safety_requirement=$_REQUEST['sf'];
	    if($obj->add_equipment($name,$id,$manufacturer,$supplier,$lab_id,$purchase_date$safety_requirement)){
            echo '{"result":1,"message": "equipment successfully added"}';
        }
        else{
            echo '{"result":0,"message": "equipment not added."}';
        }
	
    }

?>
