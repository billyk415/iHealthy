<?php
	include("dbConnect.php");

	if(!isSet($_POST['search'])){
		header("Location: index.php");
	}

	$search_sql = "SELECT * FROM `medicine` WHERE name LIKE '%".$_POST['search']."%'";

	$search_query = mysql_query($search_sql);

		if(mysql_num_rows($search_query) != 0){
			$search_rs = mysql_fetch_assoc($search_query); 
		}

?>
