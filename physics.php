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
        .options{
          border: 1px solid black;
          margin:10px;
        }
        body{
          margin-bottom: 100px;
          margin-top:30px;
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
    
      <div class="row">
         <h1 class="page-header"><a href="studymaterial.php">Study Material <small><a href="firstyear.php"> First Year </a><small> (Physics)</small></small></h1>
         <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Exam Papers</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
          </div> 
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">PDFs of refrence books</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
          </div> 
       <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Extras</h3>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <li class="list-group-item">Physics notes by Dr. Kereet Semwal.</li>
                  <li class="list-group-item">Physics notes by Dr. Kereet Semwal.</li>
                  <li class="list-group-item">Physics notes by Dr. Kereet Semwal.</li>
                  <li class="list-group-item">Physics notes by Dr. Kereet Semwal.</li>
                </ul>
              </div>
            </div>
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
 