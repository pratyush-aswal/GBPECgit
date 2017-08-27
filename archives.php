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
      <style>
        <?php
            $handle = fopen("data/style.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
        body{
          margin-bottom: 100px;
          margin-top:70px;
          background-image:url('data/arc.jpg');
        }
        .border{
          border:1px solid lightgrey;
          border-radius: 4px;
          margin:2px;
        }
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
      <div class="row" >
      <div class="col-lg-12">  
                         <?php
                    $handle = fopen("data/articlelist.txt", "r"); 
                    $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                      }             
                    fclose($handle);
              ?>

            
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
