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
            <div class="col-lg-11">
              <span style="font-size: 40px">Welcome, <?php echo($uname);?></span>
            </div>
            <a href="logout.php"><div class="btn btn-primary col-lg-1">
            Logout
            </div></a>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <ul class="list-group">
              <h3>Updates</h3>
              <?php
                if(isset($_GET["success"])){
                  if ($_GET["success"] == 0){
                    echo("<div class='alert alert-danger' role='alert'>");
                    echo("<strong>Sorry!</strong> Something is wrong. Please try again.</div>");
                
                  }
                } 
                if(!isset($_GET["alt"])){
                  $handle = fopen("data/updates.txt", "r"); 
                  $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 
                     echo ("<li class='list-group-item'>");
                     echo ($line); 
                     echo ("</li>");
                   }             
                  fclose($handle);
                    echo ("</ul><form action='adminpage.php?alt=1' method='post'>");
                    echo ("<input type='submit' value='Alter Updates' class='btn btn-warning col-lg-12'></form>");
                    }
                else{
                    echo("<form action='info-handler.php' method='post'><div class='form-group'><textarea class='form-control' rows='10' name='info-text'>");
                        $handle = fopen("data/updates.txt", "r"); 
                        $lineNumber = 1;     
                          while ( $line = fgets( $handle ) ) { 
                            echo ($line); 
                           
                         }             
                            fclose($handle);
                    echo "</textarea><br>";
                    echo ("<input type='submit' value='Alter Updates' class='btn btn-danger col-lg-12'></form>");  
                    
                    echo "</div></form>";
                     
                  }
                ?>

            </div>
            <div class="col-lg-6">
              <div class="list-group">
              <?php
              if (isset($_GET["c"])){
                  if (!$_GET["c"] == 1){
                    echo("<div class='alert alert-danger' role='alert'>");
                    echo("<strong>Sorry!</strong> Something is wrong. Please try again.</div>");
                
                  }
                }
              ?>
              <h3>Articles</h3>
              <?php
                $handle = fopen("data/articlelist.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 
                        $lenofstr = strlen($line);
                        $posh3 = strrpos($line, "<h3>")+4;
                        $posh3e = strrpos($line, "</h3>");
                        $reqlen = $posh3e - $posh3;
                          $title = trim(substr($line, $posh3, $reqlen));
                          /*if(trim(str_replace($_GET["filename"], "-", " ")) == trim($title)){
                            echo "fuck";
                          }
                          else{
                            echo "suck";
                          }*/
                        $poshref = strrpos($line, "href");
                        $posrole = strrpos($line, "role='button'>View details &raquo;</a></p></div>");
                        $reqlen1 = $posrole - $poshref;
                          $link = substr($line, $poshref, $reqlen1);

                        echo("<a ".$link."><span class='list-group-item'>".substr($line, $posh3, $reqlen)."</span></a>");
                        
                       
                    }
                    fclose($handle);
              ?>
              </div>
              <a href="newarticle.php"><div class="btn btn-success col-lg-12">Write a new article</div></a>
              
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