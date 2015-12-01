$(document).ready(viewHome());

function viewHome() {
  // var content = "";

  // content +=  "<div class='col-md-3'><a href='#'>";
  // content += "<img src='../media/co.png' class='img-responsive' id='co-img'>";
  // content += "</a><span class='wrapper'><hr></span></div>";
  // content +=  "<div class='col-md-3'><a href='#'>";
  // content += "<img src='../media/ci.png' class='img-responsive' id='ci-img'>";
  // content += "</a><span class='wrapper'><hr></span></div>";
  // content +=  "<div class='col-md-3'><a href='#'>";
  // content += "<img src='../media/ad.png' class='img-responsive' id='ad-img'>";
  // content += "</a><span class='wrapper'><hr></span></div>";
  // content +=  "<div class='col-md-3'><a href='#'>";
  // content += "<img src='../media/la.png' class='img-responsive' id='la-img'>";
  // content += "</a><span class='wrapper'><hr></span></div>";

  // $("#main-content").html(content);
}

function view_all() {
  var content = "";

  content += "<div class='form col-md-12 center-block'><div class='form-group'><label for='checkout_equipment_id_input'>Equipment ID</label>";
  content += "<input id='checkout_equipment_id_input' type='text' class='form-control input-lg' placeholder='Equipment ID'></div><div class='form-group'>";
  content += "<label for='checkout_student_id_input'>Student ID</label><input id='checkout_student_id_input' type='text' class='form-control input-lg' placeholder='Student ID'></div>";
  content += "<div class='form-group'><label for='checkout_dateout_id_input'>Date Checked Out:</label><input id='checkout_dateout_id_input' type='date' class='form-control input-lg' ";
  content += "placeholder='YYYY-MM-DD'></div><div class='form-group'><label for='checkout_datein_id_input'>Return Date:</label><input id='checkout_datein_id_input' type='date' ";
  content += "class='form-control input-lg' placeholder='YYYY-MM-DD'>";
  content += "</div><div class='form-group'><button id='checkoutbtn' onclick='check_out_equipment()' class='btn btn-primary btn-lg btn-block'>Check Out</button></div><br><hr></div>";

  $("#main-content").html(content);

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

function check_out_equipment() {
  var equipment = $("#checkout_equipment_id_input").val();
  var user = $("#checkout_student_id_input").val();
  var borrowed = $("#checkout_dateout_id_input").val();
  var datereturn = $("#checkout_datein_id_input").val();

  var theUrl="../controller/ajax-action.php?cmd=1&user="+user+"&equipment="+equipment+"&borrowed="+borrowed+"&return="+datereturn;
// alert(theUrl);
var obj=sendRequest(theUrl);		//send request to the above url
// alert(obj.result);
var status = "";
if(obj.result==1){					//check result
status += "<div  class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Success!</strong> Checkout Successful</div>";
  // viewHome();
  location.reload(); //Find a better solution
  $("#divstatus").html(status);
}
else {
  status += "<div  class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Couldn't Checkout</div>";
    $("#divstatus").html(status);

}
}

//on click runs the function
$(function(){
  $("#viewallbtn").click(function(){
    viewEquipment();
  });
});

// $(function () {
//   $("#checkoutbtn").click(function(){
//     alert("msb");
//     check_out_equipment();
//   });
// });

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




  function sendRequest(u)
  {
  // Send request to server
  //u a url as a string
  //async is type of request
    var obj=$.ajax({url:u,async:false});
  //Convert the JSON string to object
    var result=$.parseJSON(obj.responseText);
    return result;  //return object
  }

  function viewEquipment()
  {
    // var
    var equipmentid = id;
    var theUrl = "../control.php?cmd=1";  
    var obj=sendRequest(theUrl);    //send request to the above url
  
  if(obj.result==1){          //check result
    
    var equipment_list;
        //check result
        equipment_list = "<table class='' width=100%><thead><tr><th>EquipmentId</th><th>EquipmentName</th><th>SupplierName</th><th>LabId</th><th>SafetyRequirement</th>";
        equipment_list += "</tr></thead><tbody id='equipment_list_ul' class=''>";
        for (var i = 0; i < obj.Equipment.length; i++) {
          var id = obj.Equipment[i].product_id;
          equipment_list += "<tr><td>";
          equipment_list += obj.Equipment[i].equipment_name;
          equipment_list += "</td><td> "+obj.Equipment[i].equipment_id+"</td><td>";
          equipment_list += obj.Equipment[i].manufacturer_name;
          equipment_list += "</td>";
          equipment_list += "<td>";
          equipment_list += obj.Equipment[i].supplier_name;
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

$(function(){

  $("#viewallbtn").click(function(){
    // alert();
    viewEquipment();
  });
});
  

  // }

  // </script> 

