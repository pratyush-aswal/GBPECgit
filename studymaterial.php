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
          padding-bottom: 100px;
          background-image:url('data/as.jpg');
          
          margin-top:30px;
        }

        .img-thumbnail{
          width: 200px;
          
          box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19),0 2px 4px 0 rgba(0, 0, 0, 0.2);
          text-align: center;
        }
        #container{
         padding:5px;
        }
        .shadow{
          color:white;
          text-shadow:-1px 0 grey, 0 1px grey, 1px 0 grey, 0 -1px grey, 2px 2px 5px black;
          
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
    
      <div class="row ">
        <h1 class="page-header" style="border-bottom-color:black;"><span class="glyphicon glyphicon-book"> </span> Study Material</h1>


            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" >
              <a href="firstyear.php">
              <div class="img-thumbnail">  <img src="data/Firstyear.jpg" alt="Firstyear" style="width:100%">
                
              </div>
              <div id="container">
                  <h4 class="shadow">First Year</h4>
                </div>
              </a>
            </div>
             

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" >
              <a href="secondyear.php">
              <div class="img-thumbnail">  <img src="data/secondyear.jpg" alt="Secondyear" style="width:100%">
               
              </div>
               <div id="container">
                  <h4 class="shadow">Second Year</h4>
                </div>
              </a>
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " >
              <a href="thirdyear.php">
              <div class="img-thumbnail">  <img src="data/thirdyear.jpg" alt="Thirdyear" style="width:100%">
                
              </div>
              <div id="container">
                  <h4 class="shadow">Third Year</h4>
                </div>
              </a>
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " >
              <a href="finalyear.php">
                <div class="img-thumbnail">  <img src="data/finalyear.jpg" alt="Finalyear" style="width:100%">
                
              </div>
              <div id="container">
                  <h4 class="shadow">Final Year</h4>
                </div>
             </a>
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
