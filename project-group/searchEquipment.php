<html>
<form action="searchEquipment.php" method="get">
Search Text:<input type="text" size="30" name="st">
<input type="submit" value="search">


</form>
<?php
if(isset($_REQUEST['st'])){
	include_once("equipment.php");
	$obj=new equipment();
	$search_text=$_REQUEST['st'];
	
	if(!$obj->search_equipment($search_text)){
		echo "Error searching";
	}
	echo "<table border='1'>";
echo"<tr style='background-color:olive; color:white; text-align:center'><td>EQUIPMENT_ID</td><td>EQUIPMENT_NAME</td><td>DELETE</td>
<td>UPDATE</td></tr>";
$row=$obj->fetch();
while($row){
	echo "<tr style='background-color:khaki'><td> ".$row['equipments_id']."</td><td><a href=view.php?id=".$row['equipments_id'].">
	".$row['equipments_name']."</a></td><td><a href=deleteEquipment.php?id=".$row['equipments_id'].">delete</a>
	</td><td><a href=editEquipment.php?id=".$row['equipments_id'].">edit</a> </td></tr>";
    $row=$obj->fetch();
}
	
}
?>
<form action="addEquipment.php"><input type="submit" value ="Add New Product"></form>
</html>