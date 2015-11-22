<html>

<head>

<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
		<script>
			
		</script>
        
        <script  src="jquery-2.1.3.js"> </script>
	<script type="text/javascript">
	
	function getData(data){
		$("#divData").load("equipment_view_index.php?id="+data);
	}
	</script>
	</head>
	
<body>
<table id="pagelayout" align="center"               >
			<tr>
				<td colspan="2" id="pageheader">
<div class="" style="     text-align:center;">
    
    <img src="css/ashesi_banner_2011.png" width="100%" height="auto">

<!--    <i class="fa fa-home">&nbsp; </i><i  class="fa" ><b>Inventory</b></i>-->
                    </div>   				</td>
			</tr>
            
            
			<tr>
				<td id="mainnav">
                    <div id="divMainNav">
                        
<!--
                        <i class="fa" style="    margin:auto;
    height: 9em; background-color:#243546; width: 100%;"> <i class="fa fa-home" style="font-size:30px; padding-top:auto; padding-bottom:auto;"> Inventory</i> 
                        <br><br> Date: Sat Mar 28 <br>User: Daniel Bonsu
                        </i>
-->
                        
                         
                    <div class="menu"><i class="fa fa-flask">&nbsp; Labs</i></div>
                        <div class="menu"><i class="fa fa-group">&nbsp; Users</i></div>
                        <div class="menu"><i class="fa fa-gear">&nbsp; Equipment</i></div>
                        <div class="menu"><i class="fa fa-truck">&nbsp; Suppliers</i></div>
                            <div class="menu"><i class="fa fa-wrench">&nbsp; Manufacturers</i></div>
                        </div>
				</td>
				<td id="content">
                    
                    <div id="divPageMenu">
                                    <span class="menuitem" ><i class="fa fa-navicons">&nbsp;</i></span>
                                    <span class="menuitem" ><i class="fa fa-plus">&nbsp; </i></span>
                        <span class="menuitem" ><i class="fa fa-edit">&nbsp; </i></span>
                                    <span class="menuitem" ><i class="fa fa-trash">&nbsp; </i></span>
				         <span class="menuitem" id="searcher"><i class="fa fa-search">&nbsp; search</i></span>
                          <input type="text" id="txtSearch" class="searcher"/>						 
                                 
                           </div>
					
					<div id="divStatus" class="status">
							 Status Message

					</div>
					<div style=height:15px>
					</div>
					<div id="divContent">
<form action = "editEquipment.php" method = "GET">
		<div> Name: <input type ="text" name ="nm"></div><br>
		<div><input type="hidden" name="id" value="<?php print $_REQUEST['id'] ?>"</div>
	   <div> Time Purchased: <input type ="text" name ="pn"></div><br>
		<div>Description:</div><br>
		<div><textarea name = "pd" cols = '30' rows ='5'></textarea></div><br>
		<div>price:<input type ="text" name ='price'></div>
		<div><input type ="submit" value ="update"></div>
		
	</form>
	<?php
	if(isset($_REQUEST['id'])& isset($_REQUEST['nm'])& isset($_REQUEST['pn'])& isset($_REQUEST['pd']) & isset($_REQUEST['price'])){
	   include_once("equipment.php");
	    $obj=new equipment();
	   $id =$_REQUEST['id'];
		$name=$_REQUEST['nm'];
		$time_purchased=$_REQUEST['pn'];
		$description=$_REQUEST['pd'];
		$price= intval($_REQUEST['price']);
	
		if(!$obj-> edit_equipment($name,$time_purchased,$description,$price,$id)){
		echo "Error editing";
	} 
	else{
		echo"edited successfully ";
	}

	
	}

	?>
	<form action="equipment_view_index.php"><input type="submit" value ="Back to Home">
<div style=height:15px>
</div>
</form>

	

</body>
</html>