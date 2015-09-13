	<?php

	if(!isset($_REQUEST['cmd'])){
			echo '{"result":0,message:"unknown command"}';
			exit();
		}

		$cmd=$_REQUEST['cmd'];

		switch($cmd)
		{
			case 1:
				view_staff();	
				break;
			case 2:
				view_staffs();
				break;
			case 3:
				delete_staff();
				break;
			default:
				echo '{"result":0,message:"unknown command"}';
				break;
		}

	function view_staffs(){

		include("staff.php");
		$obj=new staff();
		if($obj->view_staffs()){
			$staff = $obj->fetch();
			$json = '{"result":1,"Staffs":[';
			while ($staff){
				$json = $json.'{"staffid":'.$staff["staff_id"].'
				,"firstname":"'.$staff["first_name"].'",
				"lastname":"'.$staff["last_name"].'"}';
				$staff = $obj->fetch();
				if($staff){
					$json = $json.',';
				}
			}
			$json = $json.']}';
			echo $json;
		} else {
			echo '{"result":0,"message":"cant find staff"}';
		}
		}

		function view_staff(){
			include("staff.php");
			$obj=new staff();
			$id = $_REQUEST['id'];
			if($obj->view_staff($id)){
			$staff = $obj->view_staff($id);

			if($staff){
				echo '{"result":1,"staffid":'.$staff["staff_id"].',"firstname":"'.$staff["first_name"].'","lastname":"'.$staff["last_name"].'"}';
			} else {
				echo '{"result":0,"message":"Cant find staff"}';
			}
			}
		}

		function delete_staff(){
		include("staff.php");
		$obj=new staff();
		$id=$_REQUEST['id'];
		if($obj->delete_staff($id)){
			echo '{"result":1,"message": "deleted"}';
		}else{
			echo '{"result":0,"message": "staff not removed."}';
		}
		break;
	}	

	?>