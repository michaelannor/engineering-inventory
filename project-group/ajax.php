
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
            viewStaff();	
            break;

        case 2:
            viewStaffs();
            break;

        case 3:
            logout();
            break;

        default:
        echo '{"result":0,"message":"unknown command"}';
            break;

     }

    /**
     * searches for multiple staff names in database
     */
    function viewStaffs(){

    include("staff.php");
    $obj=new staff();
    if($obj->viewStaffs()){
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
        echo "{'result':0,'message':'cant find staff'}";
    }

    }

     /**
     * searches and returns one staff member in database
     */
    function viewStaff(){
    include("staff.php");
    $obj=new staff();
    $id = $_REQUEST['id'];
    if($obj->viewStaff($id)){
        $staff = $obj->viewStaff($id);

    if($staff){
        echo '{"result":1,"staffid":'.$staff["staff_id"].',"firstname":"
        '.$staff["first_name"].'","lastname":"'.$staff["last_name"].'"}';
    } else {
        echo '{"result":0,"message":"Cant find staff"}';
    }
    }
    
    }
    
      /**
     * Logs user out of the inventory management software
     */
    function logout(){
    session_start();
    if (isset($_SESSION['USER'])) {
        session_destroy();

        echo '{"result":1,"message":"session destroyed"}';
    }   
    }

?>
