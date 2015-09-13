<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class labs extends adb{

    function add($name) {
        $str_query = "Insert into project_LAB Set lab_name='$name'";
        return $this->query($str_query);
    }
    


     function edit($id, $name) {
         $str_query = "update project_LAB Set lab_name='$name' where lab_id='$id' ";
//         echo "$str_query";
         return $this->query($str_query);
     }

     function view($id) {
         $str_query = "select lab_name, lab_id from project_LAB where lab_id='$id' ";
         return $this->query($str_query);
     }

         function search($name) {
         $str_query = "select lab_id, lab_name from project_LAB WHERE lab_name LIKE '%$name%' OR lab_id LIKE '%$name%'";
         return $this->query($str_query);
     }

     function get_all_labs() {
         $str_query = "Select lab_id, lab_name from project_LAB";
         return $this->query($str_query);

     }

   
}

?>





