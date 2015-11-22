<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
		<script>
			
		</script>
        
        <script  src="jquery-2.1.3.js"> </script>
	<script type="text/javascript">
	
	function getData(data){
		$("#divData").load("view_lab.php?id="+data);
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
					<div id="divContent">
                        

							<html>
							    <head>
							    	<title>index</title>
							    	<link rel = "stylesheet" href ="css/style.css">
							    </script>
							    </head>
							    <body>
							 		<form method ="GET" action ="suppliersadd.php">
							 			<!--Id: <input type = "text" name ="id" size ="30"> <br> <br> -->
							 			Name: <input type = "text" name ="n" size ="30"> <br> <br>
							 			Location: <input type = "text" name ="l" size = "40"> <br> <br>
							 			contacts: <input type = "text" name = "c" size ="40"> <br> <br> 		
									<input type ="submit" value = "Add">
									</form>
		
									<?php
										if (isset($_REQUEST ['n'])){
											include ("suppliers.php");
											$obj=new suppliers();
											$name = $_REQUEST['n'];
											$location = $_REQUEST['l'];
											$contacts = $_REQUEST['c'];
											if (!$obj->add_supplier($name, $location, $contacts)){
												echo"Error adding new supplier to list of suppliers";
												//die(mysql_error());
											}else{
												//echo "Supplier added to list of suppliers";
												//echo "Added $id, $name, $location, $contacts";
											}
									}

							?>
							    </body>
							</html>

					</div>
				</td>
			</tr>
   
		</table>
	</body>
</html>	