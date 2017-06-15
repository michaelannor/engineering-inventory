<?php 
/*
	*@author Chuma <chuma.amazigo@gmail.com>
	* 
	*@uses This is the group class for the update query
	*      This is and extention of the adb class.
	*@version 007
		*/

	function log_msg($level, $er_code, $msg, $mysql_msg){
		return 0;
	}


	class GpUpdate extends adb {

		/*
		@param mixed[] GUpdate($Ename): This takes the name of the equipment and makes necessary modifications
		*/
		

	function GUpdate($Ename){
		$str_query= "Update equipment_name from inventory";
	    if(!$this->query($str_query)){
	     return false;
    }
	     return mysql_fetch_assoc();	
		
	}
	}
	?> 