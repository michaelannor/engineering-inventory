<?php
//type of request
//1: get description of product
//2: delete product
//3: edit price
if(!isset($_REQUEST['cmd'])){
	echo '{"result":0,message:"unknown command"}';
	exit();
}
$cmd=$_REQUEST['cmd'];
switch($cmd)
{
	case 1:
		search_Equipment();	
		break;
	case 2:
	   
	
	default:
		echo '{"result":0,message:"unknown command"}';
		break;
}



function search_Equipment(){
	if(!isset($_REQUEST['st'])){
		//return error
		echo '{"result":0,"message": "search did not work."}';
	}
	$search_text=$_REQUEST['st'];
	include("equipment.php");
	$obj=new equipment();
	if(!$obj->search_equipment($search_text)){
		//return error
		echo '{"result":0,"message": "search did not work."}';
		return;
	}
	//at this point the search has been successful. 
	//generate the JSON message to echo to the browser
	$row=$obj->fetch();
	echo '{"result":1,"equipment":[';	//start of json object
	while($row){
		echo json_encode($row);			//convert the result array to json object
		$row=$obj->fetch();
		if($row){
			echo ",";					//if there are more rows, add comma 
		}
	}
	echo "]}";							//end of json array and object
}



?>