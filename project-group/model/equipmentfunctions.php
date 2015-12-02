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
		
	/**
	*@method boolean faults_log ($name,$id,$lab_id,$description,$date) loggs faulty equipment to se_inventory_faults table
	*@param string $name name of equipment
	*@param integer $id id of equipment
	*@param integer $lab_id lab  where equipment belong
	*@param string $description description of fault occured
	*@param date $date date fault occured
	*/
		function faults_log ($name,$id,$lab_id,$description,$date){
		    $str_query="INSERT INTO se_inventory_faults set equipment_id=$id,equipment_name='$name',laboratrory_id=$lab_id,description='$description',date_of_damage=$date";
		    return $this->query($str_query).mysql_error();
	   }
	   /**
	*@method boolean generate_purchase_report() generates report
	*/
	   function generate_purchase_report(){
		   $str_query="select equipment_id,equipment_name, manufacturer_name,supplier_name,laboratory_id,purchase_date,safety_requirement  from se_inventory_equipment";
		   return $this->query($str_query).mysql_error();
	   }
	
	}
?>