
<?php

	include_once("adb.php");
		
		class suppliers extends adb{
		function supplier(){}

		// add_supplier function.
		function add_supplier($name, $location, $contacts){
			$str_query = "insert into inventory.supplier set supplier_name = '$name', supplier_location = '$location', supplier_contacts = '$contacts'";
			//echo $str_query;
			return $this->query($str_query);
		}

		// delete_supplier function.
		function delete_supplier($id){
	        $str_query="delete from inventory.supplier where supplier_id=$id";
	        //echo $str_query;
	        return $this->query($str_query);
	    }

	    // view_supplier function.
	    function view_supplier(){
	        $str_query="select supplier_id, supplier_name, supplier_location, supplier_contacts from inventory.supplier";
	        //echo $str_query;
	        return $this->query($str_query);
		}

		// search_supplier function.
		function search_supplier($search){
	         $str_query="select supplier_id, supplier_name, supplier_location, supplier_contacts from inventory.supplier where supplier_name like'%$search%'";
	         //echo $str_query;
	         return $this->query($str_query);
        }

        // edit_supplier function.	
       function edit_supplier($id,$name,$location,$contacts){
			$str_query="update inventory.supplier set supplier_name='$name', supplier_location='$location', supplier_contacts='$contacts' where supplier_id = '$id'";
			//echo $str_query;
			return $this->query($str_query);
        }
		
       /*
        // view function.
        function view($id){
	        $str_query="select supplier_id, supplier_name, supplier_location, supplier_contacts from inventory.supplier where supplier_id=$id";
	        return $this->query($str_query);
        }
        */
    }
      
// testing
/*	$obj=new inventory();
    $obj->add_inventory("test name", "location", "5.9", "condition", "manufacturer", "quantity");*/
   ?>