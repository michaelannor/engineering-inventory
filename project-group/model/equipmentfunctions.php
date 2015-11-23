<?php
	/**
	*@author Nura Abdul-Rahman <nuraabd4@gmail.com>
	*/
	include_once("adb.php");
	class equipmentfunctions extends adb{
	/**
	*@method boolean add_equipment($name,$id,$manufacturer,$supplier,$lab_id,$safety_requirement) adds equipment to the equipment table
	*@param string $name name of equipment
	*@param integer $id id of equipment
	*@param string  $manufacturer manufacturer of equipment
	*@param string $supplier  supplier of equipment
	*@param integer $lab_id lab  where equipment belong
	*@param string $safety_requirement the safety requirement of equipment
    **/
	    function add_equipment($name,$id,$manufacturer,$supplier,$lab_id,$safety_requirement){
	        $str_query="INSERT INTO se_inventory_equipment set equipment_id=$id,equipment_name='$name',manufacturer_name='$manufacturer', supplier_name='$supplier', laboratrory_id=$lab_id,safety_requirement='$safety_requirement'";
	        return $this->query($str_query).mysql_error();
	    }
	
	}
?>