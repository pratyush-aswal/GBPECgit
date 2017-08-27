<!DOCTYPE html>
<html lang="en">
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
          margin-top: 50px;
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
      <div class="col-lg-9">
        <h3 class="page-header">Subjects</h3>
        <table class="table table-bordered table-hover table-striped">
        <tr><td><h4>Data Structures </h4></td></tr>
        <tr><td><h4>Discrete Mathematics</h4></td></tr>
        <tr><td><h4>Digital Electronics </h4></td></tr>
        <tr><td><h4>Web Technologies </h4></td></tr>
        
        <tr><td><h4>Mathematics III </h4></td></tr>
        
        <tr><td>
          <h4>Biotechnology Enggineering 
              
          </h4>
        </td></tr>
        

        <tr><td>
          <h4>Computer Science Enggineering 
              
          </h4>
        </td></tr>
        
        <tr><td>
          <h4>Masters of Ccomputer Application 
              
          </h4>
        </td></tr>

        <tr><td><a href="http://www.gbpec.ac.in/departments/course_btech_ash.pdf">Applied Science and Humanities</a></td></tr>

        </table>
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