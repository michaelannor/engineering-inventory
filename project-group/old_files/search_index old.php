<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
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
		<table id="pagelayout">
			<tr>
				<td colspan="2" id="pageheader">
					Application Header
				</td>
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem">menu 1</div>
					<div class="menuitem">menu 2</div>
					<div class="menuitem">menu 3</div>
					<div class="menuitem">menu 4</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<span class="menuitem" >page menu 2</span>
						<span class="menuitem" >page menu 3</span>
						<input type="text" id="txtSearch" />
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
							 Status Message
					</div>
					<div id="divContent">

                        
                        <form action="search_index.php" method="GET">
<!--            <div><input type="hidden" name="msg" value="<?php echo "{$_REQUEST['msg']}"; ?>"></div>-->
	Search Text:<input type="text" size="30" placeholder="Search" name="n">
	<input type="submit" value="Search" name="button">

                            <div id="divData">
                            Display Data Here
                            </div>

	<?php

	if (isset($_REQUEST['n']) && !($_REQUEST['n']=="")  ){
		$searchtext = $_REQUEST['n'];
		include_once("labs.php");
		$obj = new labs();
		$obj->search($searchtext);
//        if($obj->result != false){
        $row=$obj->fetch();
        

if ($obj->get_num_rows() > 0){
                            
                  echo "<table border=1>";
                         echo "<tr>";
                             echo "<td><b>Lab ID</b></td>";
                             echo "<td><b>Lab Name</b></td>";
                             echo "</tr>";
}
        while ($row){

		echo "<tr>";
                            echo "<td>";
            $rowid = $row["lab_id"];
            echo "<span onclick=getData($rowid) class='clickspot'>";
	echo $row["lab_id"];
            echo "</span>";
        		echo "</td>";
	
                            echo "<td>";
	echo $row["lab_name"];
        		echo "</td>";
            
            
              echo "<td>";
	echo $row["lab_name"];
        		echo "</td>";
            
              echo "<td>";
	echo "<a href='update_index.php?id=$row[lab_id]&n=$row[lab_name]'>edit</a>";
        		echo "</td>";
            
            
                          echo "<td onclick=alert() class='clickspot'>";
	echo "delete";
        		echo "</td>";
            
            
		echo "</tr>";
		$row=$obj->fetch();

        }
    }
//    }
                            ?>
                        </table>
					          


					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	