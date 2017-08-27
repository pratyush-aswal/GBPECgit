<?php
		

			$dsn = "mysql:dbname=gbpec";
			$db_username = "root";
			
			try {
			 $conn = new PDO( $dsn, $db_username);
			 $conn-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			} catch ( PDOException $e ) {
			 echo "Connection failed: " . $e-> getMessage();
			}
			
			
  			$inputEmail = $_POST["email"];
  			$inputPassword = $_POST["password"];
  
			$sql = "SELECT * FROM admin";

			try {
			 $rows = $conn->query( $sql );
				 foreach ( $rows as $row ) {
				 	if ($row["username"] == $inputEmail ){
				 		if ($row["password"] == $inputPassword ){
				 		$userfirstname = $row["firstname"];
				 		$userlastname = $row["lastname"];
				 		$useremail = $row["adminemail"];
				 		$username = $row["username"];
				 		$flag = 1;
				 	}
	
				 	} 

			 	}
			 }



			  catch ( PDOException $e ) {
			 echo "Query failed: " . $e->getMessage();
			}

			echo "</ul>";
			$conn = null;

			if($flag != 1){
				header("location:loginpage.php?message=6789");
			}
			elseif($flag==1){
				session_start();
				$_SESSION["username"] = $username;
				$_SESSION["useremail"] = $useremail;
				$_SESSION["userlastname"] = $userlastname;
				$_SESSION["userfirstname"] = $userfirstname;

				header("location:adminpage.php");
			}
			

?>