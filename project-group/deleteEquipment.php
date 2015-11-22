
<?php
$id=$_REQUEST['id'];
if(isset($_REQUEST['id'])){
	include_once("equipment.php");
	$obj=new equipment();
	
	if(!$obj-> delete_equipment($id)){
		echo "Error deleting";
	}
	else{
		echo "Deleted item from the list";
	}
}
?>

