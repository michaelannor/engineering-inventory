/*author : Daniel Bonsu
* Javascript file contains send request and script function
*/
  
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
    //var equipmentid = id;
    var theUrl = "../control.php?cmd=1";  
    var obj=sendRequest(theUrl);    //send request to the above url
  
  if(obj.result==1){          //check result
    
    var equipment_list;
        
        //check result
        equipment_list = "<table class='reportTable' width=100%><thead><tr><th>EquipmentId</th><th>EquipmentName</th><th>SupplierName</th><th>LabId</th><th>SafetyRequirement</th>";
        equipment_list += "</tr></thead><tbody id='content' class='reportTable'>";
        for (var i = 0; i < obj.Equipment.length; i++) {
          var id = obj.Equipment[i].equipment_id;
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
        equipment_list += "</tbody></table>"
        $("#maincontent").html(equipment_list);
        // $("#pagetitle").html("Product List");

    // $("#simulateClick").trigger("click");
  }else{
      //show error message
      alert("error: couldn't fetch products");//err
  }
}

function viewDescription(id)
  {
    var equipmentid = id;
    var theUrl = "../control.php?cmd=2&id="+equipmentid;  
    var obj=sendRequest(theUrl);    //send request to the above url
  
  if(obj.result==1){          //check result
    
    var description;
        
        //check result
        equipment_list = "<table class='reportTable' width=100%><thead><tr><th>EquipmentId</th><th>EquipmentName</th><th>SupplierName</th><th>LabId</th><th>SafetyRequirement</th>";
        equipment_list += "</tr></thead><tbody id='content' class='reportTable'>";
      
          var id = obj.Equipment[id].equipment_description;

          
        $("#maincontent").html(description);
        // $("#pagetitle").html("Product List");

    // $("#simulateClick").trigger("click");
  }else{
      //show error message
      alert("error: couldn't fetch products");//err
  }
}


$(function(){

  $("#viewallbtn").click(function(){
    viewEquipment();
  });
});

$(function(){

  $("#viewdescbtn").click(function(){
    viewDescription();
  });
});

