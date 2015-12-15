
<?php
/**
* @author Daniel Bonsu
* @version 1.1 Formatted version of PHP code that acts as the control class for AJAX calls.
*/

/**
* Process Ajax 
*/
if (!isset($_REQUEST['cmd']))
{
  echo '{"result":0,message:"unknown command"}';
  exit();
}

  $cmd=$_REQUEST['cmd'];
  switch ($cmd) {
  case 1:
  viewEquipment();	
  break;
// 2
  default:
  echo '{"result":0,"message":"unknown command"}';
  break;

}
/**
* Shows one equipment from the database 
*/   
function viewEquipment()
{
  include("equipment.php");
  $obj = new equipment();
  if($obj->viewEquipment()){
  $equipment = $obj->fetch();
  $json = '{"result":1,"Equipment":[';
echo $json;
while($equipment)
{
  echo json_encode($equipment);         
  $equipment=$obj->fetch();

if ($equipment)
{
  echo ",";
}

}
  echo "]}";                        
}
else
{
  echo '{"result":0,"message": "no equipment"}';
}

}
?>
