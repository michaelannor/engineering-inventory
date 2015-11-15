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

        content += "<img onmouseover='hover(\'../media/co2.png\',\'co-img\');' onmouseout='unhover(\'../media/co.png\',\'co-img\');' src='../media/co.png' class='img-responsive' id='co-img'>";
      content += "</a><span class='wrapper'><hr></span></div>";

      content +=  "<div class='col-md-3'><a href='#'>";

        content += "<img onmouseover='hover(\'../media/ci2.png\',\'ci-img\');' onmouseout='unhover(\'../media/ci.png\',\'ci-img\');' src='../media/ci.png' class='img-responsive' id='ci-img'>";
        content += "</a><span class='wrapper'><hr></span></div>";


        content +=  "<div class='col-md-3'><a href='#'>";

        content += "<img onmouseover='hover(\'../media/ad2.png\',\'ad-img\');' onmouseout='unhover(\'../media/ad.png\',\'ad-img\');' src='../media/ad.png' class='img-responsive' id='ad-img'>";
        content += "</a><span class='wrapper'><hr></span></div>";

        content +=  "<div class='col-md-3'><a href='#'>";

      content += "<a href=''><img onmouseover='hover(\'../media/la2.png\',\'la-img\');' onmouseout='unhover(\'../media/la.png\',\'la-img\');' src='../media/la.png' class='img-responsive' id='la-img'></a>";
      content += "</a><span class='wrapper'><hr></span></div>";




  $("#main-content").html(content);
}

function view_check_out_equipment() {
  // body...
}

$(function(){

  $("#check_out_equipment_btn").click(function(){
    view_check_out_equipment();
  });

});
