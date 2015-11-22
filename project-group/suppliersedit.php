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
                        
                         
                      <a href="view_index.php"><div class="menu"><i class="fa fa-flask">&nbsp; Labs</i></div></a>
                    <a href="searchStaff.php"><div class="menu"><i class="fa fa-group">&nbsp; Staff</i></div></a>
                     <a href="equipment_view_index.php">   <div class="menu"><i class="fa fa-gear">&nbsp; Equipment</i></div></a>
                        <a href="suppliersView.php"><div class="menu"><i class="fa fa-truck">&nbsp; Suppliers</i></div></a>
                        <a href="view_GpManu.php"> <div class="menu"><i class="fa fa-wrench">&nbsp; Manufacturers</i></div></a>
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
				</head>
				<body>
				<form action = "suppliersedit.php" method = "GET">
						
						<div> Name: <input type ="text" name ="n"></div><br>
						<div><input type="hidden" name="id" value="<?php print $_REQUEST['id'] ?>"</div>
					    <div> Location: <input type ="text" name ="l"></div><br>
						<div> Contact: <input type = "text" name = "c"></div><br>
						<div><input type ="submit" value ="edit"></div>
					
					</form>
					<?php
					if(isset($_REQUEST['id'])){
							if(isset($_REQUEST['n'])){

					   include_once("suppliers.php");
					    $obj=new suppliers();
					    $id =$_REQUEST['id'];
						$name=$_REQUEST['n'];
						$location=$_REQUEST['l'];
						$contacts=$_REQUEST['c'];
					
						if(!$obj-> edit_supplier($id,$name,$location,$contacts)){
						echo "Error editing";
					} 
					else{
						echo"successfully edited ";
					}
				}}
				?>
				</html>
					</div>
				</td>
			</tr>
   
		</table>
	</body>
</html>	