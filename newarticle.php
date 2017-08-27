<?php
session_start();
  
  if (isset($_SESSION["username"])){
      $username = $_SESSION["username"];
      $ufname = $_SESSION["userfirstname"];
      $ulname = $_SESSION["userlastname"];
      $uname = $ufname." ".$ulname;
    }
  else{header("location:loginpage.php?message=0050");}
?>

<!DOCTYPE html>
<html lang="en">
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

  <body>


             <?php
                $handle = fopen("data/nav.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>


    <div class="container">
        <div class="row" style="margin-top: 50px;border-bottom: 1px solid black;">
            <div class="col-lg-12">
              <h1>Welcome, <?php echo($uname);?></h1>
            </div>
        </div>
        <div class="row">
        <br>
          <div class="col-lg-12">
            <div class="form-group" style="border: 1px solid grey;padding:10px;border-radius: 8px;background-color: #eee;">
                <form action="writearticle.php" method="post">
                  <input type="text" name="title" class="form-control" placeholder="Title of article"><br>
                  <textarea name="content" class="form-control" rows="10"></textarea><br>
                  <input type="text" name="author" placeholder="author" class="form-control"><br>
                  <input type="submit" value="Generate Preview" class="btn btn-success">
                  <a href="adminpage.php"><span class="btn btn-danger">Cancel</span></a>
                </form>
            </div>
          </div>      
        </div>
        
    </div>    
        <?php
            $handle = fopen("data/footer.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>

   
  </body>
</html>
