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
        .options{
          border: 1px solid black;
          margin:10px;
        }
        body{
          margin-bottom: 100px;
          margin-top:50px;
          background-color: #e3e3e3;
        }
        .table-responsive{
          max-height: 150px;
          overflow-y: scroll;  
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
         <h1 class="page-header" style="border-bottom-color: black;"><a href="studymaterial.php"><span class="glyphicon glyphicon-book"> </span> Study Material </a><small> Third Year</small></h1>
            


          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Computer Science and Enggineering</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell">ANALYSIS AND DESIGN OF ALGORITHMS  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">COMPUTER ARCHITECTURE   <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">JAVA PROGRAMMING  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">MICROPROCESSORS  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">ARTIFICIAL INTELLIGENCE   <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>   
                            <tr><td class="filterable-cell">COMPILER DESIGN  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">COMPUTER NETWORKS  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">SOFTWARE ENGINEERING  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">DISTRIBUTED SYSTEMS  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">INDUSTRIAL ECONOMICS & MANAGEMENT  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                         </table>
                      </div>
                    </div>
            
            </div>
          </div> 
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Mechanical Engg. and Production Engg.</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell">Concept of Programming and OOPS  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Dynamics of Machine  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Heat and Mass Transfer  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Manufacturing Science II  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Machine Design I  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>   
                            <tr><td class="filterable-cell">Fluid Machinery  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">I.C Engine  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Machine Design II  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Refrigeration and Air Conditioning  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Operation Research  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                         </table>
                      </div>
                    </div>
            
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Civil Engineering</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell">Concept of Programming and OOPS  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Dynamics of Machine  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Heat and Mass Transfer  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Manufacturing Science II  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Machine Design I  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>   
                            <tr><td class="filterable-cell">Fluid Machinery  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">I.C Engine  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Machine Design II  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Refrigeration and Air Conditioning  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Operation Research  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                         </table>
                      </div>
                    </div>
            
            </div>
          </div>
      
          
      </div>
      <div class="row">
          
          <div class="col-lg-4 col-md-4 col-sm-4"> 
           <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Electrical Engineering</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell">Control System  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Electrical Machines-II  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Elements of Power System  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Power Station Practice <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Digital Signal Processing  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>   
                            <tr><td class="filterable-cell">Power Electronics  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Power System Analysis <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Switch Gear and Protection <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Intelligent Systems  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Communication Engineering  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                         </table>
                      </div>
                    </div>
              </div>
          </div> 
          
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Electronics & Communication Engineering</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell">Digital Communication Systems <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Antenna and Wave Propagation  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Micro-Controller and Embedded Systems  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Control Systems <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Object Oriented Programming & Design <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>   
                            <tr><td class="filterable-cell">Digital Signal Processing   <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Microwave and Radar Engineering <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">IC Technology  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Microelectronics <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Wireless Communication  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                         </table>
                      </div>
                    </div>
            
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Biotechnology</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell">Bioinformatics I <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Bioprocess Engineering <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Cell and Tissua Culture Technology  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Enzymology  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Biodiversity and Conservation  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>   
                            <tr><td class="filterable-cell">Bioinformatics II  <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Bioreactor Engineering <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Environmental Biotechnology <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">IPR, Bioethics and Biosafety <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                            <tr><td class="filterable-cell">Recombinant DNA Technology <br><small><a href="#"> class notes </a></small>|<small><a href="#"> exam papers </a></small>|<small><a href="#"> books </a></small></td></tr>
                         </table>
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
 