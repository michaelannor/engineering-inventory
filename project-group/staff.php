	<?php

	include_once ("adb.php");

	class staff extends adb{
		function add_staff($fname, $sname, $id){
			$query = "insert into staff set first_name = '$fname' , last_name = '$sname' , staff_id = '$id'";
			return $this->query($query);
		}
		function edit_staff($id, $fname,$sname,$new_id){
			$query = "update staff set first_name = '$fname', last_name = '$sname', staff_id = '$new_id' where staff_id = $id";
			return $this->query($query);
		}
		function delete_staff($id){
			$query = "delete from staff where staff_id = '$id'";
			 return $this->query($query);
		}
		function view_staff($id){
			$query = "select staff_id, first_name, last_name from staff where staff_id =$id";
		 	$this->query($query);
			 return $this->fetch();
		}
		function view_staffs(){
			$query = "select staff_id, first_name, last_name from staff";
			return $this->query($query);		
		}
		function search_one($id){
			$query = "select staff_id, first_name,last_name from staff where staff_id = '$id'";
			return $this->query($query);
		}
		
	}
	?>
