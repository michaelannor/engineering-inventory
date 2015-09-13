
	<html>
		<head>
			<title>Index</title>
			<link rel="stylesheet" href="css/style.css">
	        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
			<script>
				
			</script>
	        
	        <script  src="jquery-2.1.3.js"> </script>
		<script type="text/javascript">
		
		</script>
	        
		</head>
		<body>
			<table id="pagelayout" align="center"               >
				<tr>
					<td colspan="2" id="pageheader">
	<div class="" style="     text-align:center;">
	    
	    <img src="css/ashesi_banner_2011.png" width="100%" height="170%">

	                    </div>   				</td>
				</tr>
	            
	            
				<tr>
					<td id="mainnav">
	                    <div id="divMainNav">                        
	                         
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
						<div id="divContent">
	<?php


	if(isset($_REQUEST['id'])){
		
	$id=$_REQUEST['id'];

		include_once("staff.php");
		$obj=new staff();
		
		if(!$obj-> delete_staff($id)){
			echo "Error deleting";
		}
		else{
			echo "Deleted item from the list";
		

	}
	header('Location: searchStaff.php');
	}
	?>
	</div>
					</td>
				</tr>
	   
			</table>
		</body>
	</html>	