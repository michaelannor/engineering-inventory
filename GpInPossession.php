<?php 
/*
	*@author Chuma <chuma.amazigo@gmail.com>


	*@uses This is the group class for checked out items for the user, here the user views what he has in possession
	*      This is and extention of the adb class.
	*@version 001
		*/

	function log_msg($level, $er_code, $msg, $mysql_msg){
		return 0;
	}


	class GpInPossession extends adb {

		/*
		@param mixed[] inPossession($userid, equipmentid, equipmentname): Query passes user id, equipment id and equipment name to see 
		checked out equipment.
		*/
		

	function GPossession($userid,$equipmentid,$equipmentname){
		$str_query= "Select user_id, equipment_id, equipment_name from inventory inner join checked_out";
	    if(!$this->query($str_query)){
	     return false;
    }
	     return mysql_fetch_assoc();	
		
	}
	}
	?> 