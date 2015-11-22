<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			
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
					
	<form action="add_index.php" method="GET">
		<div>Name:<input type="text" placeholder="Name" name="n"><div>
		<button type="submit">Add</button>
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
		include_once("labs.php");
		$obj = new labs();
		$obj->add($name);

}
	?>


					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	