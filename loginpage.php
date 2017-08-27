<?php
session_start();
  
  if (isset($_SESSION["username"])){
    header("location:adminpage.php");
  }
?>
<!DOCTYPE html>
<html>
<head> 

            <?php
                $handle = fopen("data/header.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
                fclose($handle);
            ?>
    <style type="text/css">
            <?php
                $handle = fopen("data/style.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
                fclose($handle);
            ?>
    </style>
</head>


             <?php
                $handle = fopen("data/nav.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
<body style="background-color: #eee;">

<div class="container">

	
	<div style="border: 1px solid lightgrey;padding: 10px; max-width: 300px; font-weight: normal; margin: 0 auto; margin-top: 90px; background-color: #FFFFFF;">
		
  <?php
          if (isset($_GET["message"])){
            $message = $_GET["message"];
              
                if ($message == "6789"){
                    echo("<div class='alert alert-danger' role='alert'>");
                    echo("<strong>Sorry!</strong> Something is wrong. Please try again.</div>");
                }
                elseif ($message == "0050"){
                    echo("<div class='alert alert-warning' role='alert'>");
                    echo("You have to login first</div>");
                }
                elseif ($message == "0000"){
                    echo("<div class='alert alert-success' role='alert'>");
                    echo("You have been logged out.</div>");
                }
          }
      ?>

    <h2 style="font-weight: lighter;">Please Sign-in</h2><hr>
		<form  method="post" action="SignInProcess.php" role="form">
			<div class="form-group">
				<br>
				<input type="text" class="form-control" 

					style=" margin-bottom: -1px; 
							border-bottom-left-radius: 0px; 
							border-bottom-right-radius: 0px; " 
					placeholder="Username" required="" autofocus=""  name="email" id="InputEmail">
				<input type="password" class="form-control" style="border-top-left-radius: 0px; border-top-right-radius: 0px;" placeholder="Password" required="" name="password" id="InputPassword"><br>
				<p class="help-block">
				<a href="ForgotPassword.php">Forgot Password?</a><br>
				</p>
				<input type="submit" class="btn btn-primary btn-block" value="Submit">
				
			</div>

		</form>
		</div>
		
</div>

</body>

        <?php
            $handle = fopen("data/footer.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
</html>