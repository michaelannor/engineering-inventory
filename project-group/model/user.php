<?php

/**
 * author: Michael Annor
 * date: 15th November, 2015
 * description: Class with queries to access the se_inventory_users table
 */

include_once ("adb.php");

class user extends adb {

/**
 * [[The verify_user function checks if a user exists]]
 * @param [[int]] $user
 */
  function verify_user($user){
    $str_query = "select user_id from se_inventory_users where user_id='$user'";
    if(!$this->query($str_query)){
      return false;
    }
    else {
      return true;
    }
  }

  /**
   * [[The verify_user function checks if a user exists]]
   * @param [[int]] $user
   */
   function login($username, $password){
       $str_query="SELECT user_name, user_group from se_inventory_users where user_name='$username' and password='$password'";
         return $this->query($str_query);
     }


}


?>
