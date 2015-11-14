<?php
/**
* @author Daniel Bonsu
* @version 1.1 Formatted version of PHP code that searches for staff members */

    
       /**
     * Begins new user session
     */

    session_start();
    if (!isset($_SESSION['USER'])) {
        header("location: login.php");
        exit();
    }

?>


<html>       
<head
<title>Index</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
</head>


<script  src="jquery-2.1.3.js"> </script>
<script type="text/javascript">



function sendRequest(u){
// Send request to server
//u a url as a string
//async is type of request
var obj=$.ajax({url:u,async:false});
//Convert the JSON string to object
var result=$.parseJSON(obj.responseText);
return result;  //return object
}

function viewStaffs(){
var theUrl = "staffcontrol.php?cmd=2";
var obj =sendRequest(theUrl);
var table = "<table>"
var counter = 0;
var row = "<tr style='background-color:olive; color:white; text-align:center'><th>StaffID</th><th>FirstName</th><th>LastName</th><th>Edit</th><th>Delete</th><th>View</th></tr>";
var column="";
var style = "";

if (obj.result==1) {


while (counter<obj.Staffs.length){
 if (counter%2==0) {
     style = "style = 'background-color:olive";
  } else {
     style = "style = 'background-color:white";
  }
        
 column += "<tr "+style+"; color:black; text-align:center'><td>"
 +obj.Staffs[counter].staffid +"</td><td>"+obj.Staffs[counter].firstname+"</td><td>"
 +obj.Staffs[counter].lastname +"</td><td><a href='staffedit.php?id="
 +obj.Staffs[counter].staffid+"&st="+obj.Staffs[counter].firstname+"&str="
 +obj.Staffs[counter].lastname+"'>edit</a></td><td><a href='staffdelete.php?id="
 +obj.Staffs[counter].staffid+"&st="+obj.Staffs[counter].firstname+"&str="
 +obj.Staffs[counter].lastname+" onclick='deleteProduct({row['staff_id']})'>delete</a></td>
 <td><input type='submit' value='View' onclick ='view_staff("+obj.Staffs[counter].staffid+")'></td></tr>";
 counter++;
}
$("#divContent").html(table +row+ column +"</table>");

return;
}
else{
$("#divContent").text(obj.message);
return;
}
}

function viewStaff(id){

var staffid = id;
console.log(id+"hello i'm");
var theUrl = "staffcontrol.php?cmd=1&id="+staffid;
var obj =sendRequest(theUrl);
var table = "<table>"
var counter = 0;
var row = "<tr style='background-color:olive; color:white; text-align:center'><th>StaffID</th><th>FirstName</th><th>LastName</th><th>Edit</th><th>Delete</th></tr>";
var column="";
var style = "";

if (obj.result==1) {
                    
column += "<tr "+style+"; color:black; text-align:center'><td>"
+obj.staffid +"</td><td>"+obj.firstname+"</td><td>"
+obj.lastname +"</td><td><a href='staffedit.php?id="+obj.staffid+"&st="+obj.firstname+"&str="+obj.lastname+"'>edit</a></td><td><a href='staffdelete.php?id="+obj.staffid+"&st="+obj.firstname+"&str="+obj.lastname+" onclick='deleteProduct({row['staff_id']})'>delete</a></td></tr>";

$("#divContent").html(table +row+ column +"</table>");

return;
}
else{
$("#divContent").text(obj.message);
return;
}
}

function logout(){
var theUrl="staffcontrol.php?cmd=3";
var obj=sendRequest(theUrl);
if (obj.result==1) {
window.location.href="login.php";
}
}            
</script>

</head>
<body>
<table id="pagelayout" align="center">
<tr>
<td colspan="2" id="pageheader">
<div class="" style="     text-align:center;">

<img src="css/ashesi_banner_2011.png" width="100%" height="170%">
        
<tr>
<td id="mainnav">
    <div id="divMainNav">
        
</i>                        
         
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
            <span class="menuitem searcher" id="logout" onclick="logout()"><i class="fa fa-search">&nbsp; Logout</i>
</span>
            <a href= "staffadd.php"><span class="menuitem" ><i class="fa fa-plus">&nbsp; Add Staff Member</i></span></a>
            

                    
           
</div>

<span id="divStatus" class="status">
Status Message
</span>




<form action="searchstaff.php" method="GET">

Search by Staff ID:<input type="text" size="30" placeholder="Search" name="id" required>
<input type="submit" value="Search" name="button"></form>
<input type="submit" value="View All" onclick="view_staffs()"name="button"></form>


</div>


<div id="divContent"> 

<?php
   /**
     * Searches for staff member and displays in a table form.
     */

    if (isset($_REQUEST['id']) ) {
        $id = $_REQUEST['id'];
        include_once("staff.php");
        $obj = new staff();
        $obj->search_one($id);
        $row=$obj->fetch();

        echo "<table>";  

        echo "<tr style='background-color:olive; color:white; text-align:center'>";

        echo "<th>StaffID</th>";

        echo "<th>FirstName</th>";

        echo "<th>LastName</th>";

        echo "<th>Edit</th>";

        echo "<th>Delete</th>";

        echo "</tr>";

        echo "<tbody>";

        $i=0;


    while ($row){


    if ($i%2==0) {
        $style = "style = 'background-color:olive'";
    } else {
        $style = "style = 'background-color:white'";
    } 
        $i++;

        echo "<tr $style>";
        echo "<td>".$row["staff_id"]."</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td><a href = 'staffedit.php?id=$row[staff_id]'> Edit </a></td>";
        echo "<td><a href = 'staffdelete.php?id=$row[staff_id]'> Delete</a></td>";
        echo "</tr>";



        $row=$obj->fetch();
    }


    }


        echo "</tbody>
        </table>

        </div>
        </td>
        </tr>
        </table>
        </div>  
        </body>
        </html>";

?>

