$(document).ready(viewHome());

function viewHome(){
}

function sendRequest(u){
    // Send request to server
    //u a url as a string
    //async is type of request
    // alert(u);
    var obj=$.ajax({url:u,async:false});
    //Convert the JSON string to object
    var result=$.parseJSON(obj.responseText);
    return result;	//return object
}


//on click runs the function


$(function(){
  $("#viewallbtn").click(function(){
    viewEquipment();
  });
});

  $(function(){

  $("#electronicslab").click(function(){
    viewLabs(1);
  });
});

    $(function(){

  $("#designlab").click(function(){
    // alert();
    viewLabs(2);
  });
});

$(function(){

  $("#roboticslab").click(function(){
    // alert();
    viewLabs(3);
  });
});

  $(function(){

  $("#sciencelab").click(function(){
    // alert();
    viewLabs(4);
  });
});




$(function() {
    $("#la-img").mouseover(function() {
            // var src = $(this).attr("src").match(/[^\.]+/) + "2.png";
            $(this).attr("src", "../media/la2.png");
        })
        .mouseout(function() {
            // var src = $(this).attr("src").replace("../media/la.png", ".png");
            $(this).attr("src", "../media/la.png");
        });
});

$(function() {
    $("#ad-img")
        .mouseover(function() {
            // var src = $(this).attr("src").match(/[^\.]+/) + "2.png";
            $(this).attr("src", "../media/ad2.png");
        })
        .mouseout(function() {
            // var src = $(this).attr("src").replace("../media/la.png", ".png");
            $(this).attr("src", "../media/ad.png");
        });
});

$(function() {
    $("#ci-img")
        .mouseover(function() {
            // var src = $(this).attr("src").match(/[^\.]+/) + "2.png";
            $(this).attr("src", "../media/ci2.png");
        })
        .mouseout(function() {
            // var src = $(this).attr("src").replace("../media/la.png", ".png");
            $(this).attr("src", "../media/ci.png");
        });
});

$(function() {
    $("#co-img")
        .mouseover(function() {
            // var src = $(this).attr("src").match(/[^\.]+/) + "2.png";
            $(this).attr("src", "../media/co2.png");
        })
        .mouseout(function() {
            // var src = $(this).attr("src").replace("../media/la.png", ".png");
            $(this).attr("src", "../media/co.png");
        });
});


  function viewEquipment()
  {
    var theUrl = "../control.php?cmd=1";  
    var obj=sendRequest(theUrl);    //send request to the above url
  
  if(obj.result==1){          //check result
    
    var equipment_list;
        //check result
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

        // alert(equipment_list);
        $("#main-content").html(equipment_list);
        // $("#pagetitle").html("Product List");

    // $("#simulateClick").trigger("click");
  }else{
      //show error message
      alert("error: couldn't fetch products");//err
  }
}

function viewLabs(id){

var theUrl = "../control.php?cmd=2&id="+id;  
var obj=sendRequest(theUrl);    //send request to the above url

  if(obj.result==1 ){          //check result
    
    var equipment_list;
        //check result
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
          equipment_list += "<td><button type= 'button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal"+id+"'>View Description</button><div class='modal fade' id='myModal"+id+"' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'><div class='modal-dialog' role='document'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button><h4 class='modal-title' id='myModalLabel'>Equipment Description</h4></div><div class='modal-body'>"+obj.Labs[i].equipment_description+"</div><div class='modal-footer'><button type='button' class='btn btn-default' data-dismiss='modal'>Close</button></div></div></div></div>    </td><td>";
          equipment_list += "</td>";
          equipment_list += "</tr>";

        }
        equipment_list += "</tbody></table>";

        // alert(equipment_list);
        $("#main-content").html(equipment_list);
        // $("#pagetitle").html("Product List");

    // $("#simulateClick").trigger("click");
  }
  else{
      //show error message
      alert("error: couldn't fetch products");//err
  }



}


