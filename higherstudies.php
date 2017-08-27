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
          margin-top:30px;
          background-image:url('data/hs.jpg');
        }
        h3{
          color:white;
        }
        h1{
          color:white;
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
        <h1 class="page-header"><span class="glyphicon glyphicon-education"> </span> Study Material for higher studies</h1>

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <ul class="list-group"><h3>GATE</h3>
              <li class="list-group-item"><a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqbHM4UWJhOG51ekU">Study Material</a></li>
              <li class="list-group-item"><a href="http://www.gate.iitg.ac.in/">Official Website</li></a>
              </ul>
            </div>
             

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
              <ul class="list-group"><h3>CAT</h3>
              <li class="list-group-item"><a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqbHM4UWJhOG51ekU">Study Material</li></a>
              <li class="list-group-item"><a href="https://iimcat.ac.in/per/g01/pub/756/ASM/WebPortal/1/index.html?756@@1@@1">Official Website</li></a>
              </ul>
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
              <ul class="list-group"><h3>GRE</h3>
              <li class="list-group-item"><a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqbHM4UWJhOG51ekU">Study Material</li></a>
              <li class="list-group-item"><a href="https://www.ets.org/gre">Official Website</li></a>
              </ul>
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
              <ul class="list-group"><h3>XAT</h3>
              <li class="list-group-item"><a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqbHM4UWJhOG51ekU">Study Material</li></a>
              <li class="list-group-item"><a href="http://www.xatonline.in/">Official Website</li></a>
              </ul>
             </div>

              <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
              <ul class="list-group"><h3>CDS</h3>
              <li class="list-group-item"><a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqbHM4UWJhOG51ekU">Study Material</li></a>
              <li class="list-group-item"><a href="http://www.upsc.gov.in/">Official Website</li></a>
              </ul>
            </div>

             <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
              <ul class="list-group"><h3>AFCAT</h3>
              <li class="list-group-item"><a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqbHM4UWJhOG51ekU">Study Material</li></a>
              <li class="list-group-item"><a href="http://www.careerairforce.nic.in/">Official Website</li></a>
              </ul>
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
