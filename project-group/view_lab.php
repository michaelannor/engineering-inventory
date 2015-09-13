<?php

	$labId = $_REQUEST["id"];
//	$nameOfProduct = $_REQUEST["n"];

if (isset($_REQUEST['id'])){
//		$searchtext = $_REQUEST['n'];
		include_once("labs.php");
		$obj = new labs();
		$obj->view($labId);
//        if($obj->result != false){
        $row=$obj->fetch();

echo "<table>";

echo "<tr>Lab Details</tr>";
            while ($row){
                echo "<tr>";
                echo "<td>ID:</td>";
                                            echo "<td>";

                	echo $row["lab_id"];
                            echo "</td>";

echo "</tr>";

		echo "<tr>";
                                echo "<td>Lab Name:</td>";

                            echo "<td>";
	echo $row["lab_name"];
        		echo "</td>";
	
//                            echo "<td>";
//	echo $row["lab_name"];
//        		echo "</td>";
		echo "</tr>";
		$row=$obj->fetch();

        }
    
echo "</table>";
}
?>