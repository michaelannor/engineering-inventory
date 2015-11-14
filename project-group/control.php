
<?php

/**
* @author Daniel Bonsu
* @version 1.1 Formatted version of PHP code that acts as the control class for AJAX calls.
*/

    if (!isset($_REQUEST['cmd'])) {
        echo '{"result":0,message:"unknown command"}';
        exit();
    }

    $cmd=$_REQUEST['cmd'];

    switch ($cmd) {
        case 1:
            viewEquipment();	
            break;

        default:
        echo '{"result":0,"message":"unknown command"}';
            break;

     }
    
     /**
     * searches and returns one equipment in database
     */
    function viewEquipment(){
    include("equipment.php");
    $obj = new equipment();
     if($obj->viewEquipment()){
        $equipment = $obj->fetch();
        $json = '{"result":1,"Equipment":[';
    
while($equipment){
    echo json_encode($equipment);         //convert the result array to json object
    $equipment=$obj->fetch();
    if ($equipment){
      echo ",";
    }
  }
    echo "]}";                          //end of json array and object
  }
  else{
    echo '{"result":0,"message": "no equipment"}';
  }
}
?>
