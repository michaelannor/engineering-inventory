<?php

	include_once("equipment.php");
	$obj=new equipment();
	
	
	if(!$obj->view_equipment()){
		echo"error running query";
	}
			echo "<table border='1'>";
echo"<tr style='background-color:olive; color:white; text-align:center'><td>EQUIPMENTS_ID</td><td>EQUIPMENTS_NAME</td><td>TIME_PURCHASED</td>
<td>DESCRIPTION</td><td>PRICE</td><td>DELETE</td><td>UPDATE</td></tr>";
    $row=$obj->fetch();
		while($row){
	    	echo "<tr style='background-color:khaki'><td> ".$row['equipments_id']."</td><td>".$row['equipments_name']."</td><td>".$row['time_purchased']."</td>
			<td>".$row['description']."</td><td>".$row['price']."</td><td><a href=deleteEquipment.php?id=".$row['equipments_id'].">delete</a></td>
			<td><a href=editEquipment.php?id=".$row['equipments_id'].">edit</a> </td></tr>";
	$row=$obj->fetch();
		}
	


?>