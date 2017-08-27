<?php
	session_start();
  if (!isset($_SESSION["username"])){
          header("location:userpage.php");
    }
  
	if(isset($_POST["info-text"])){	
		$info =	$_POST["info-text"];
			$handle = fopen("data/updates.txt", "w"); 
            fwrite($handle, $info);
            fclose($handle);
		header("location:adminpage.php");
	}
	else{
		header("location:adminpage.php?success=0");
	}
?>