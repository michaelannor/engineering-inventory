<?php
	/**
	*@author Nura Abdul-Rahman <nuraabd4@gmail.com>
	*/
	include_once("adb.php");
	class equipment extends adb{
	/**
	*@method boolean add_equipment($name,$time_purchased,$description,$price) adds equipment to the equipment table
	*@param string $name name of equipment
	*@param integer $time_purchase time equipment was purchased
	*@param string $description  description of equipment
	*@param integer $price price of equipment
    	**/
	function add_equipment($name,$time_purchased,$description,$price){
	 $str_query="INSERT INTO equipment set equipments_name='$name',time_purchased='$time_purchased', description='$description', price=$price";
	 return $this->query($str_query).mysql_error();
	}

?>