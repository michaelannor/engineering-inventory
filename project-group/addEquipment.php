
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="container">
		    <center><h2> Add Equipment </h2></center>
		    <form method="post" action="addEquipment.php" role="form">
		    <br>
	
			<div class="form-group"><label for="equipment">Equipment Name </label><input type="text" name="nm" class="form-control" placeholder="Enter Equipment Name"  required></div>
			<div class="form-group"><label for="id"> Equipment ID</label><input type="text" name="tp" class="form-control" placeholder="Enter Equipment ID" required></div>
		    <div class="form-group"><label for="manufacturer"> Manufacturer Name</label><input type="text" name="dc" class="form-control" placeholder="Enter Manufacturer Name" required></div>
		    <div class="form-group"><label for="supplier"> Supplier Name </label><input type="text" name="pr" class="form-control" placeholder="Enter Supplier Name" required></div>
		    <div class="form-group"><label for="lab">Lab ID</label><input type="text" name="lb" class="form-control" placeholder="Enter Lab ID" size="10" required></div>
		    <div class="form-group"><label for="safety"> Safety Requirement</label><input type="text" name="sf" class="form-control" placeholder="Enter Safety Requirement"  required></div>
		    <div><input type="submit" class="btn btn-info" value="Add Equipment"></div>	
	
	        </form>
	    </div>
	
	<?php
	    /*includes equipment class in order to use faults_log function
		*/
	    if(isset($_REQUEST['nm'])){
	        include_once("equipment.php");
	        $obj=new equipment();
	        $name=$_REQUEST['nm'];
	        $id=$_REQUEST['tp'];
	        $manufacturer=$_REQUEST['dc'];
	        $supplier=$_REQUEST['pr'];
	        $lab_id=$_REQUEST['lb'];
	        $safety_requirement=$_REQUEST['sf'];
	        /* check for successfull addition of an equipment onto the 
           database. If no an error message is return else gives a success message
	       */
	        if(!$obj->add_equipment($name,$id,$manufacturer,$supplier,$lab_id,$safety_requirement)){
		        echo '<div class="alert alert-danger"><strong>Danger!</strong> Error Adding.</div>';
	        }
	        else{
	            echo '<div class="alert alert-success"><strong>Success!</strong> equipment has been succesfully added.</div>';
	        }
	    }
	?>
	
</html>