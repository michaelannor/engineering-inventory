<?php

/**
 * author: Michael Annor
 * date: 22nd December, 2015
 * description: User Test Class
 */

include_once ("adb.php");

class test_user extends PHPUnit_Framework_TestCase {

  /**
   * @test test login function
   */
   function test_login(){
      include_once ("user.php");
      $user = new user();
      $this->assertEquals(true, $user->login("user", "pass"));
      return $user;
     }

  /**
   * @test test login function fetches a user
   */
   function test_fetch_user(){
      include_once ("user.php");
      $user = new user();
      $user->login("user", "pass");
      $row = $user->fetch();
      $this->assertGreaterThan(0, $row);
      return $user;
     }

}


?>
