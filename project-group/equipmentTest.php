<?php

/**
* @author Daniel Bonsu
* @version 2.0 Formatted version of PHP code that contains user test functions for equipment class.
*/

  class equipmentTest extends PHPUnit_Framework_TestCase
  {
    
  /**
   * @test test view equipment function
   */
      public function equipmentIsViewed()
      {

          include("equipment.php");
          $obj = new equipment();
          $this->assertTrue(true);
          return $obj->viewEquipment();
   
      }

  /**
   * @test test view lab function
   */
     public function labIsViewed()
     {
          $obj = new equipment();
          $this->assertTrue(true);
          return $obj->viewLabs(1);
   
     }

  }







?>
