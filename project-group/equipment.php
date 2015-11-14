	<?php

/**
 * @author Daniel Bonsu
 * @version 1.1 Formatted version of PHP code that contains user functions for inventory equipment */

    include_once ("adb.php");

    class equipment extends adb
    { 
	 /**
     * Returns all equipment from database
     *@param $id, This holds the id of the staff members details
     *@return $this->fetch: this returns the result of the query if true
     */	
    function viewEquipment()
    {
        $query = "select * from se_inventory_equipment";
        $result=$this->query($query);
        $length=$this->get_num_rows();
        $row =$this->fetch();

        echo "<table style='border: solid 2px'>
                  <thead>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Manufacturer</th>
                  <th>Supplier</th>
                  <th>Lab</th>
                  <th>Safety Requirement</th>
                  </tr>
                  </thead>";
                  

        for($i=0;$i<$length;$i++){
            echo "<tbody>";
            echo "<tr>";
            echo "<td class='t'>{$row['equipment_id']}</td>";
            echo "<td class='t'>{$row['equipment_name']}</td>";
            echo "<td class='t'>{$row['manufacturer_name']}</td>";
            echo "<td class='t'>{$row['supplier_name']}</td>";
            echo "<td class='t'>{$row['laboratory_id']}</td>";
            echo "<td class='t'>{$row['safety_requirement']}</td>";
            echo "</tr>";

            $row = $this->fetch();

        }
        echo "</tbody>";
        echo "</table>";
    }
	
		
}
	
