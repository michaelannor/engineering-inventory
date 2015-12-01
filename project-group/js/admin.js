$(document).ready(viewHome());
/*
*@method hover(img, id) represents a mouse hover action when mouse is placed over a particular image with a specified id
*@param {png} image image that takes the hover effect
*@param {integer} id id of a specific object
*/
function hover(img, id) {
   console.log("enter");
   element = document.getElementById(id);
   element.setAttribute('src', img);
}
/*
*@method hover(img, id) represents unhover action when mouse is placed over a particular image with a specified id
*@param {png} image image that takes the unhover effect
*@param {integer} id id of a specific object
*/
function unhover(img, id) {
   element = document.getElementById(id);
   element.setAttribute('src', img);
}
/*
*@method viewHome() a view that displays all the contents in the user interface
*/
function viewHome() {
   var content = "";

   content +=  "<div class='col-md-3'><a href='#'>";
   content += "<img src='../media/co.png' class='img-responsive' id='co-img'>";
   content += "</a><span class='wrapper'><hr></span></div>";
   content +=  "<div class='col-md-3'><a href='#'>";
   content += "<img src='../media/ci.png' class='img-responsive' id='ci-img'>";
   content += "</a><span class='wrapper'><hr></span></div>";
   content +=  "<div class='col-md-3'><a href='#'>";
   content += "<img src='../media/ad.png' class='img-responsive' id='ad-img'>";
   content += "</a><span class='wrapper'><hr></span></div>";
   content +=  "<div class='col-md-3'><a href='#'>";
   content += "<img src='../media/la.png' class='img-responsive' id='la-img'>";
   content += "</a><span class='wrapper'><hr></span></div>";

   $("#main-content").html(content);
}

/*
*@method view_check_out_equipment() a view that contains a checking out form
*/
function view_check_out_equipment() {
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
/*
*@method view_add_equipment() a view that contains add equipment form
*/
function view_add_equipment(){
   var content="";
   content += "<div class='form-group'><label for='equipment'>Equipment Name </label><input type='text' id='nm'class='form-control' placeholder='Enter Equipment Name' required></div>";
   content += "<div class='form-group'><label for='id'> Equipment ID</label><input type='text' id='tp' class='form-control' placeholder='Enter Equipment ID' required></div>";
   content += "<div class='form-group'><label for='manufacturer'> Manufacturer Name</label><input type='text' id='dc' class='form-control' placeholder='Enter Manufacturer Name' required></div> ";
   content += "<div class='form-group'><label for='supplier'> Supplier Name </label><input type='text' id='pr'class='form-control'placeholder='Enter Supplier Name' required></div> ";
   content += "<div class='form-group'><label for='lab'>LabID</label><input type='text' id='lb'class='form-control' placeholder='Enter Lab ID'  required></div>";
   content +="<div class='form-group'><label for=date>Purchase Date</label><input type='date' id='pd' class='form-control' placeholder='Enter Date' required></div>";
   content += "<div class='form-group'><label for='safety'> Safety Requirement</label><input type='text' id='sf' class='form-control' placeholder='Enter Safety Requirement' required></div>";
   content += "<button id='add_equipment_btn' onclick='add_equipment()' class='btn btn-primary btn-lg btn-block' > Add </button>";
   $("#main-content").html(content);
}

/*
*@method sendRequest(u)sends request to server
*@param{string} u a url as a string
*/
function sendRequest(u){
    var obj=$.ajax({url:u,async:false});
    //Convert the JSON string to object
    var result=$.parseJSON(obj.responseText);
    return result;	//return object
}
/*
*@method check_out_equipment() a method that calls an ajax command to verify and authorize checking out
*/
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
    viewHome();
    check_out_hover();
    check_out_click();
    // location.reload(); //Find a better solution
    $("#divstatus").html(status);
}
    else {
        status += "<div  class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Couldn't Checkout</div>";
        $("#divstatus").html(status);

    }
}
/*
*@method add_equipment() a method that calls an ajax command to verify and authorize adding an equipment
*/
function add_equipment() {
	
   var equipment = $("#nm").val();
   var id = $("#tp").val();
   var  manufacturer = $("#dc").val();
   var supplier = $("#pr").val();
   var lab_id = $("#lb").val();
   var purchase_date=$("#pd").val();
   var safety_requirement = $("#sf").val();

   var theUrl="../controller/ajax-action.php?cmd=2&nm="+equipment+"&tp="+id+"&dc="+manufacturer+"&pr="+supplier+"&lb="+lab_id+"&pd="+purchase_date+"&sf="+safety_requirement;
   // alert(theUrl);
   var obj=sendRequest(theUrl);		//send request to the above url
   // alert(obj.result);
   var status = "";
   if(obj.result==1){					//check result
        status += "<div class='alert alert-success'><strong>Success!</strong> equipment has been succesfully added.</div></div>";
        //viewHome();
        // add_equipment_click();
        // location.reload(); //Find a better solution
        $("#divstatus").html(status);
    }
    else {
        status += "<div  class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Couldn't Checkout</div>";
        $("#divstatus").html(status);

    }
}
/*
* a method that calls check_out_click() 
*/
$(function(){
    check_out_click();
});
/*
*@method check_out_click() calls view_check_out_equipment() method when an check out equipment image  is clicked
*/
function check_out_click() {
   $("#co-img").click(function(){
    view_check_out_equipment();
    });
}
/*
* a method that calls add_equipment_click() 
*/
$(function(){
  add_equipment_click();
});
/*
*@method add_equipment_click() calls view_add_equipment() method when an add equipment image  is clicked
*/
function add_equipment_click(){
	$("#ad-img").click(function(){
		view_add_equipment();
	});
}


/*
* a method that displays a hover effect
*/
$(function() {
    $("#la-img")
        .mouseover(function() {
            // var src = $(this).attr("src").match(/[^\.]+/) + "2.png";
            $(this).attr("src", "../media/la2.png");
        })
        .mouseout(function() {
            // var src = $(this).attr("src").replace("../media/la.png", ".png");
            $(this).attr("src", "../media/la.png");
        });
});

/*
* a method that displays a hover effect
*/
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
/*
* a method that displays a hover effect
*/
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
/*
* a method that calls check_out_hover() method
*/
$(function() {
    check_out_hover();
});
/*
*@method check_out_hover() displays a hover action
*/
function check_out_hover(){
  $("#co-img")
      .mouseover(function() {
          // var src = $(this).attr("src").match(/[^\.]+/) + "2.png";
          $(this).attr("src", "../media/co2.png");
        })
      .mouseout(function() {
          // var src = $(this).attr("src").replace("../media/la.png", ".png");
          $(this).attr("src", "../media/co.png");
        });
}
