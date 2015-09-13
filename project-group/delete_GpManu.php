<?php
 $Mid=$_REQUEST['id'];
 if(isset($_REQUEST['id'])){
    include_once("GpManu.php");
    $obj = new GpManu();
 	$Mid=$_REQUEST['id'];
    
    if(!$obj-> deleteManu($Mid)){
    }
    else{
        	header('Location: view_GpManu.php');

         }
   }
   ?>
  