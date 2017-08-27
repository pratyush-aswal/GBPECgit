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
        <div class="row" style="margin-top: 50px;">
            <?php
              if(!isset($_GET["conf"])){
                ?>
                  <div class="well" style="word-wrap: break-word;">
                      <h1><?php 
                            echo($_POST["title"]);
                            echo("<small> ~by ".$_POST["author"]."</small>"."<hr>");
                            ?></h1>
                      <p><?php echo($_POST["content"]);?></p>
                  </div>
                  <form action="writearticle.php?conf=1" method="post">
                      <input type="hidden" name="title" class="form-control" placeholder="Title of article" value="<?php echo($_POST["title"]); ?>"><br>
                      <textarea name="content" class="form-control" rows="10" style="display:none;"><?php echo($_POST["content"]);?></textarea><br>
                      <input type="hidden" name="author" placeholder="author" class="form-control" value="<?php echo($_POST["author"]); ?>"><br>
                      <input type="submit" value="Submit Article" class="btn btn-success">
                      <a href="adminpage.php"><span class="btn btn-danger">Cancel</span></a>
                  </form>
                <?php
              }
              else{
                      if ($_GET["conf"] == 1){
                          $filename = "article/".str_replace(" ", "-", $_POST["title"]).".txt";
                          $info = "<h3>".$_POST["title"]."<small> ~by ".$_POST["author"]."</small></h3><p>".$_POST["content"]."</p>";
                          $handle = fopen( $filename, "w"); 
                          fwrite($handle, $info);
                          fclose($handle);
                          
                          $txt = "<div class='col-lg-6'><h3>".strtoupper($_POST["title"])."</h3><p>".substr($_POST["content"], 0, 150)."...</p><p><a class='btn btn-default' href='readarticle.php?filename=".str_replace(" ", "-", $_POST["title"])."' role='button'>View details &raquo;</a></p></div>";
                          $myfile = file_put_contents('data/articlelist.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
                          header("location:adminpage.php?c=1");  
                          

                      }
              }
            ?>
               
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
