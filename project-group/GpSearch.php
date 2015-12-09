<?php 
+/*
+	*@author Chuma <chuma.amazigo@gmail.com>
+	* 
+	*@uses This is the group class for equipment, all other functions for equipment originate from the group equipment class.
+	*      This is and extention of the adb class.
+	*@version 007
+		*/
+
+	function log_msg($level, $er_code, $msg, $mysql_msg){
+		return 0;
+	}
+
+
+	class GpSearch extends adb {
+	
+		/*
+		@param mixed[] search($Ename): This takes the name of the equipment and searches for it in the database.
+		*/
+		
+
+	function GSearch($Ename){
+		$str_query= "select Equipment like equipment_name = %$Ename%";
+	    if(!$this->query($str_query)){
+	     return false;
+	    }
+	     return mysql_fetch_assoc();	
+		
+	}
+	}
+	?> 
