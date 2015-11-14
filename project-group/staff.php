	<?php

/**
 * @author Daniel Bonsu
 * @version 1.1 Formatted version of PHP code that contains staff functions */

    include_once ("adb.php");

    class staff extends adb
    { 
     /**
     * Adds user information into database
     *@param $fname, $sname, $id, This holds the value of the staff members details
     *@return $this->query: this returns the result of the query if true
     */
    function addStaff($fname, $sname, $id)
    {
        $query = "insert into staff set first_name = '$fname' , last_name = '$sname',
        staff_id = '$id'";
        return $this->query($query);
    }
	
	 /**
     * Updates details of user and populates database
     *@param $id, $fname,$sname,$new_id, These parameters hold the values of the individual staff members 
     *@return $this->query: this returns the result of the query if true
     */	

    function editStaff($id, $fname,$sname,$new_id)
    {
        $query = "update staff set first_name = '$fname', last_name = '$sname',
        staff_id = '$new_id' where staff_id = $id";
        return $this->query($query);
    }
	
	 /**
     * Deletes user information from database
     *@param $id, This holds the value of the staff members details
     *@return $this->query: this returns the result of the query if true
     */	
    function deleteStaff($id)
    {
        $query = "delete from staff where staff_id = '$id'";
        return $this->query($query);
    }
	
	 /**
     * Returns a users information from database
     *@param $id, This holds the id of the staff members details
     *@return $this->fetch: this returns the result of the query if true
     */	
    function viewStaff($id)
    {
        $query = "select staff_id, first_name, last_name from staff where 
        staff_id ='$id'";
        $this->query($query);
        return $this->fetch();
    }
	
	 /**
     * Returns all users information from database
     *@return $this->query: this returns the result of the query if true
     */
    function viewStaffs()
    {
        $query = "select staff_id, first_name, last_name from staff";
        return $this->query($query);		
    }

	  /**
     * Returns information of one user from database
     *@param $id, This holds the value of the staff members details
     *@return $this->query: this returns the result of the query if true
     */
    function searchOne($id)
    {
        $query = "select staff_id, first_name,last_name from staff where 
        staff_id = '$id'";
        return $this->query($query);
    }
		
}
	
