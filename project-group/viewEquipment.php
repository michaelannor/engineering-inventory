<?php

/**
* @author Daniel Bonsu
* @version 1.1 Formatted version of PHP code that views equipment */

?>

  <html>       
  <head
  <title>Index</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
  </head>

  <script  src="jquery-2.1.3.js"> </script>
  <script type="text/javascript">

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
    var equipmentid = id;
    var theUrl = "control.php?cmd=1";
    var obj =sendRequest(theUrl);
    return obj;
}

  </script>    
  <body>
  <table id="pagelayout" align="center">
  <tr>
  <td colspan="2" id="pageheader">
  <div class="" style="text-align:center;">
  <img src="css/ashesi_banner_2011.png" width="100%" height="170%">
  <tr>
  <td id="mainnav">
  <div id="divMainNav">
  </i>                        

  <div class="menu"><i class="fa fa-gear">&nbsp;Equipment</i></div>
  </div>
  </td>
  <td id="content">
  <div id="divPageMenu">
  <span class="menuitem" ><i class="fa fa-navicons">&nbsp;</i></span>

  <a href="allEquipment.php">View All</a>                 

  </div>

  <span id="divStatus" class="status">
  Status Message
  </span>

