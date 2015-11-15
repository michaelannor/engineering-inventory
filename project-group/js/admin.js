$(document).ready(viewHome());

function hover(img, id) {
  element = document.getElementById(id);
  element.setAttribute('src', img);
}
function unhover(img, id) {
  element = document.getElementById(id);
  element.setAttribute('src', img);
}

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

function view_check_out_equipment() {
  var content = "";

  content += "<form class='form col-md-12 center-block'><div class='form-group'><label for='checkout_equipment_id_input'>Equipment ID</label>";
  content += "<input id='checkout_equipment_id_input' type='text' class='form-control input-lg' placeholder='Equipment ID'></div><div class='form-group'>";
  content += "<label for='checkout_student_id_input'>Student ID</label><input id='checkout_student_id_input' type='text' class='form-control input-lg' placeholder='Student ID'></div>";
  content += "<div class='form-group'><label for='checkout_dateout_id_input'>Date Checked Out:</label><input id='checkout_dateout_id_input' type='date' class='form-control input-lg' ";
  content += "placeholder='DD/MM/YYYY'></div><div class='form-group'><label for='checkout_datein_id_input'>Return Date:</label><input id='checkout_datein_id_input' type='date' ";
  content += "class='form-control input-lg' placeholder='DD/MM/YYYY'>";
  content += "</div><div class='form-group'><button id='checkoutbtn' class='btn btn-primary btn-lg btn-block'>Check Out</button></div><br><hr></form>";

  $("#main-content").html(content);

}

function check_out_equipment() {
  var equipment = $("#checkout_equipment_id_input");
  var student = $("#checkout_student_id_input");
  var borrowed = $("#checkout_dateout_id_input");
  var datereturn = $("#checkout_datein_id_input");
}

$(function(){

  $("#la-img").click(function(){
    view_check_out_equipment();
  });

  $("#checkoutbtn").click(function(){
    check_out_equipment();
  });



});

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
