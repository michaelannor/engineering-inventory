<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="style.css">
		<script>
			function validate(){
				var obj=document.get.elementby("pn");
				var str=obj.value;
				if(str.length<=0){
					obj.style.backgroundColor="red";
					return false;
			    }else{
					obj.style.backgroundColor="white";
					return false;
				}
				return false
				}
				
			
		</script>
	</head>
	<body>
		<table>
			<tr>
				<td colspan="4" id="pageheader" style="font-family:verdana; font-size:250%;">
					Ashesi Equipmentware
				</td>
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem1" align= "center">Equipments</div>
					<div class="menuitem2" align= "center" >Suppliers</div>
					<div class="menuitem3" align= "center">Locations</div>
					<div class="menuitem4" align= "center">Manufacturers</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >Add</span>
						<span class="menuitem" >Update</span>
						<span class="menuitem" >Delete</span>
						<input type="text" id="txtSearch" placeholder="Search" align="right"/>
						<span class="menuitem">Go</span>		
					</div>
					<div id="divStatus" class="status">
						Message
					</div>
					<!-- <div id="divContent"> -->
					
					<!-- 	Content space
						<span class="clickspot">click here </span>
						<table id="tableExample" class="reportTable" width="100%">
							<tr class="header">
								<td>column1</td>
								<td>column2</td>
								<td>column3</td>
								<td>column4</td>
							</tr>
							<tr class="row1">
								<td>data example</td>
								<td>123</td>
								<td>01/01/2014</td>
								<td>data</td>
							</tr>
							<tr class="row2">
								<td>data example</td>
								<td>123</td>
								<td>01/01/2014</td>
								<td>data</td>
							</tr> -->
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	