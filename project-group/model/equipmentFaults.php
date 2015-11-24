<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
	        <center><h2> Log Equipment Faults </h2></center>
            <form method="post" action="equipmentFaults.php" role="form">
	            <br>
	
                <div class="form-group"><label for="equipment">Equipment Name </label><input type="text" name="nm" class="form-control" placeholder="Enter Equipment Name" size="10" required></div>
                <div class="form-group"><label for="id"> Equipment ID</label><input type="text" name="tp" class="form-control" placeholder="Enter Equipment ID" size="10" required></div>
                <div class="form-group"><label for="lab">Lab ID</label><input type="text" name="lb" class="form-control" placeholder="Enter Lab ID" size="10" required></div>
                <div class="form-group"><label for="lab">Description</label><input type="text" name="dp" class="form-control" placeholder="Enter Description" size="10" required></div>
                <div class="form-group"><label for="lab">Date of Damage</label><input type="date" name="dt" class="form-control" placeholder="YYYY/MM/DD" size="10" required></div>
                <div><input type="submit" class="btn btn-info" value="Log Fault"></div>
 
            </form>
        </div>




    <?php
	    /*includes equipment class in order to use faults_log function
		*/
        if(isset($_REQUEST['nm'])){
	        include_once("equipmentfunctions.php");
	        $obj=new equipment();
	        $name=$_REQUEST['nm'];
	        $id=$_REQUEST['tp'];
	        $lab_id=$_REQUEST['lb'];
	        $description=$_REQUEST['dp'];
	        $date=$_REQUEST['dt'];
	        /* check for successfull addition of an equipment onto the 
           database. If no an error message is return else gives a success message
	       */
	        if(!$obj->faults_log ($name,$id,$lab_id,$description,$date)){
		        echo "Error logging faults";
            }
	         else{
	            echo'<div class="alert alert-success"><strong>Success!</strong> fault succesfully logged.</div></div>';
	        }
        }
    ?>

     </body>
</html>