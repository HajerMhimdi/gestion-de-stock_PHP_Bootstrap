<?php
   if(isset($_GET["id"])){
	   $id = $_GET["id"];
	   if(!empty($id) && is_numeric($id)){
		 include("include/connexion.php");
	     $query = "delete from accessoire where id=$id";
	     $conn->exec($query);
	     header("Location:affichage.php");
	   }
   }
?>