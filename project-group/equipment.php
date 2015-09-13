<?php
include_once("adb.php");
class equipment extends adb{
function add_equipment($name,$time_purchased,$description,$price){
$str_query="insert into equipment set equipments_name='$name',time_purchased='$time_purchased', description='$description', price=$price";
return $this->query($str_query).mysql_error();

}
function delete_equipment($id){
	$str_query="delete from equipment where equipments_id=$id";
	return $this->query($str_query);
}
function view_equipment(){
	$str_query="select equipments_id, equipments_name,time_purchased,description, price from equipment";
	return $this->query($str_query);
}
function search_equipment($search_text){
	$str_query="select equipments_id,equipments_name from equipment where equipments_name like'%$search_text%'";
	return $this->query($str_query);
}
function view($id){
	$str_query="select  equipments_id ,equipments_name,time_purchased,description, price from equipment where equipments_id=$id";
	return $this->query($str_query);
}
function edit_equipment($name,$time_purchased,$description,$price,$id){
	$str_query="update equipment set equipments_name='$name', time_purchased='$time_purchased', description='$description', price='$price'
	where equipments_id=$id";
	return $this->query($str_query);
}
}
?>


