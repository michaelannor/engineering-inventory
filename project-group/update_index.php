<html>
	<head>
		<title>Edit Lab</title>
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
                        <div class="menu"><i class="fa fa-group">&nbsp; Users</i></div>
                        <div class="menu"><i class="fa fa-gear">&nbsp; Equipment</i></div>
                        <div class="menu"><i class="fa fa-truck">&nbsp; Suppliers</i></div>
                            <div class="menu"><i class="fa fa-wrench">&nbsp; Manufacturers</i></div>
                        </div>
				</td>
				<td id="content">
                    
                    <div id="divPageMenu">
                                    <span class="menuitem" ><i class="fa fa-navicons">&nbsp;</i></span>
                                    <a href="add_index.php"><span class="menuitem" ><i class="fa fa-plus">&nbsp; Add Lab</i></span></a>
                        <!-- <span class="menuitem" ><i class="fa fa-edit">&nbsp; </i></span>
                                    <span class="menuitem" ><i class="fa fa-trash">&nbsp; </i></span>
				         -->
                     <form action="search_index.php" method="GET">
<!--            <div><input type="hidden" name="msg" value="<?php echo "{$_REQUEST['msg']}"; ?>"></div>-->
	<input class="menuitem" id="searcher" type="submit" value="Search" name="button">
	<input id="txtSearch" class="searcher" type="text" size="30" placeholder="Search" name="n">

	</form>

				        <!--  <span class="menuitem" id="searcher"><i class="fa fa-search">&nbsp; search</i></span>		
                                    <input type="text" id="txtSearch" class="searcher"/>
                         -->   
					</div>

					<div id="divStatus" class="status">
							 Status Message
					</div>
					<div id="divContent">
					
                        <form action="update_index.php" method="GET">
                <div><input type="hidden" name="id" value="<?php echo "{$_REQUEST['id']}"; ?>"></div>

		<div>Name:<input type="text" placeholder="Name" name="n" value="<?php echo "{$_REQUEST['n']}";  ?>"> 
		<button type="submit">Rename</button> </div>
	</form>
            

            
            
            
<!-- <select name="mid">
	<?php
		//include_once("labs.php");
		//$obj = new labs();
		//$obj->get_all_supervisors();
		//$row=$obj->fetch(); 

	?>
</select> -->

	<?php

	if (isset($_REQUEST['n'])){
		$name = $_REQUEST['n'];
        $id = $_REQUEST['id'];
		include_once("labs.php");
		$obj = new labs();
		$obj->edit($id, $name);

}
	?>
					</div>
				</td>
			</tr>
   
		</table>
	</body>
</html>	