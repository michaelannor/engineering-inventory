$(document).ready(
  // initlogin()
);

// function initlogin() {
//   if (localStorage.getItem("user")==null){
//     getloginpage();
//   }
//   else {
//     window.location.assign("app.html");
//   }
// }

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

function login() {
  user = un.value;
  pass = ps.value;
  // alert(user +" k "+ pass );
  var theUrl="controller/ajax-action.php?cmd=3&user="+user+"&pass="+pass;
    var obj=sendRequest(theUrl);		//send request to the above url

    if(obj.result==1){					//check result
      // add to local STORAGE
      // alert(obj.username);
      // localStorage.setItem("user", obj.username);
      if(obj.usergroup=="STUDENT"){
      window.location.assign("./regular/index.html");
    }
    if(obj.usergroup=="FACULTY"){
    window.location.assign("./regular/index.html");
  }
    if(obj.usergroup=="ADMIN"){
    window.location.assign("./admin/index.php");
  }
          // for (var i = 0; i < obj.category.length; i++) {
            // var category = obj.category[i].category_id;}
      // $("#simulateClick").trigger("click");
    }else{
        //show error message
        // shownotification("error");//err
    }
}
