
<?php

/**
* @author Daniel Bonsu
* @version 1.1 Formatted version of PHP code that acts as the control class for AJAX calls.
*/


//Process Ajax Request

    if (!isset($_REQUEST['cmd']))
    {
        echo '{"result":0,message:"unknown command"}';
        exit();
    }

/**
* @method switch($cmd) it has cases of different commands
* @param integer $cmd an number that represents different switch cases
*/
    $cmd=$_REQUEST['cmd'];
    switch ($cmd) {
    case 1:
    viewEquipment();	
    break;

    case 2:
    viewLabs();
    break;

    default:
    echo '{"result":0,"message":"unknown command"}';
    break;

    }


//Displays all equipment collected from the database 
 
    function viewEquipment()
    {
        include("equipment.php");
        $obj = new equipment();
    if($obj->viewEquipment())
    {
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


//Displays all equipment collected from specific labs collected from the database 
 
    function viewLabs(){
        include("equipment.php");
        $obj = new equipment();
        $id = $_REQUEST['id'];
    if($obj->viewLabs($id))
    {
        $labs = $obj->viewLabs($id);
        $json = '{"result":1, "Labs":[';
        echo $json;

    while ($labs)
    {
        echo json_encode($labs);
        $labs = $obj->fetch(); 

    if ($labs)
    {
        echo ",";
    }

    }

        echo "]}";                        
    }
else
    {
        echo '{"result":0,"message": "no labs"}';
    }
    
    }

?>
