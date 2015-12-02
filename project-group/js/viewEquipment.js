/**
 * @file 
 * 1.1 Formatted version of the javascript code that contains view functions and accompanying button clicks.
 *
 */


$(document).ready(viewHome());

/*
*@method viewHome() a view that displays all the contents in the user interface
*/
function viewHome(){
}

/*
*@method sendRequest(u) sends request to server
*@param{string} u a url as a string
*/
function sendRequest(u){
  
    var obj=$.ajax({url:u,async:false});
    var result=$.parseJSON(obj.responseText);
    return result;	
}

/*
*@method button click calls viewEquipment() method 
*/
$(function(){
  $("#viewallbtn").click(function(){
    viewEquipment();
  });
});

/*
*@method button click calls viewLabs() method 
*/
  $(function(){
  $("#electronicslab").click(function(){
    viewLabs(1);
  });
});

/*
*@method button click calls viewLabs() method 
*/
  $(function(){
  $("#designlab").click(function(){
    viewLabs(2);
  });
});

/*
*@method button click calls viewLabs() method 
*/
$(function(){
  $("#roboticslab").click(function(){
    viewLabs(3);
  });
});

/*
*@method button click calls viewLabs() method 
*/
  $(function(){
  $("#sciencelab").click(function(){
    viewLabs(4);
  });
});

/*
*@method a method that displays a hover effect
*/
$(function() {
    $("#la-img").mouseover(function() {
            $(this).attr("src", "../media/la2.png");
        })
        .mouseout(function() {
            $(this).attr("src", "../media/la.png");
        });
});


/*
*@method a method that displays a hover effect
*/
$(function() {
    $("#ad-img")
        .mouseover(function() {
            $(this).attr("src", "../media/ad2.png");
        })
        .mouseout(function() {
            $(this).attr("src", "../media/ad.png");
        });
});


/*
*@method a method that displays a hover effect
*/
$(function() {
    $("#ci-img")
        .mouseover(function() {
            $(this).attr("src", "../media/ci2.png");
        })
        .mouseout(function() {
            $(this).attr("src", "../media/ci.png");
        });
});


/*
*@method a method that displays a hover effect
*/
$(function() {
    $("#co-img")
        .mouseover(function() {
            $(this).attr("src", "../media/co2.png");
        })
        .mouseout(function() {
            $(this).attr("src", "../media/co.png");
        });
});


/*
*@method viewEquipment() displays all equipment listed in database
*/
  function viewEquipment()
  {
    var theUrl = "../control.php?cmd=1";  
    var obj=sendRequest(theUrl);   
  if(obj.result==1){         
    
    var equipment_list;
       
        equipment_list = "<table class='table table-striped' width=100%><thead><tr><th>EquipmentId</th><th>EquipmentName</th><th>SupplierName</th><th>LabId</th><th>Safety Requirement</th>";
        equipment_list += "</tr></thead><tbody id='equipment_list_ul' class=''>";
        for (var i = 0; i < obj.Equipment.length; i++) {
          var id = obj.Equipment[i].equipment_id;
          equipment_list += "<tr><td>";
          equipment_list += id;
          equipment_list += "</td><td> "+obj.Equipment[i].equipment_name+"</td><td>";
          equipment_list += obj.Equipment[i].manufacturer_name;
          equipment_list += "</td>";
          equipment_list += "<td>";
          equipment_list += obj.Equipment[i].supplier_name;
          equipment_list += "</td><td> "+obj.Equipment[i].safety_requirement+"</td>";
          equipment_list += "<td><button type= 'button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal"+id+"'>View Description</button><div class='modal fade' id='myModal"+id+"' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'><div class='modal-dialog' role='document'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button><h4 class='modal-title' id='myModalLabel'>Equipment Description</h4></div><div class='modal-body'>"+obj.Equipment[i].equipment_description+"</div><div class='modal-footer'><button type='button' class='btn btn-default' data-dismiss='modal'>Close</button></div></div></div></div>    </td><td>";
          equipment_list += "</td>";
          equipment_list += "</tr>";

        }
        equipment_list += "</tbody></table>";

       $("#main-content").html(equipment_list);
     
  }else{
     
      alert("error: couldn't fetch equipment");
  }
}

/*
*@method viewLabs(id) displays equipment in specific labs identified by id
*@param {integer} id id of a specific lab
*/
function viewLabs(id){

var theUrl = "../control.php?cmd=2&id="+id;  
var obj=sendRequest(theUrl);    

  if(obj.result==1 ){          
    
    var equipment_list;
      
        equipment_list = "<table class='table table-striped' width=100%><thead><tr><th>EquipmentId</th><th>EquipmentName</th><th>ManuafcturerName</th><th>SupplierName</th><th>Safety Requirement</th>";
        equipment_list += "</tr></thead><tbody id='equipment_list_ul' class=''>";
        for (var i = 1; i < obj.Labs.length; i++) {
          var id = obj.Labs[i].equipment_id;
          equipment_list += "<tr><td>";
          equipment_list += id;
          equipment_list += "</td><td> "+obj.Labs[i].equipment_name+"</td><td>";
          equipment_list += obj.Labs[i].manufacturer_name;
          equipment_list += "</td>";
          equipment_list += "<td>";
          equipment_list += obj.Labs[i].supplier_name;
          equipment_list += "</td><td> "+obj.Labs[i].safety_requirement+"</td>";
          equipment_list += "<td><button type= 'button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal"+id+"'>View Description</button><div class='modal fade' id='myModal"+id+"' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'><div class='modal-dialog' role='document'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button><h4 class='modal-title' id='myModalLabel'>Equipment Description</h4></div><div class='modal-body'>"+obj.Labs[i].equipment_description+"</div><div class='modal-footer'><button type='button' class='btn btn-default' data-dismiss='modal'>Close</button></div></div></div></div></td><td>";
          equipment_list += "</td>";
          equipment_list += "</tr>";

        }
        equipment_list += "</tbody></table>";

        $("#main-content").html(equipment_list);
  }
  else{
      alert("error: couldn't fetch equipment");
  }
}


