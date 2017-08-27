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
          margin-top: 20px;
          background-color: #e3e3e3;
        }
        .table-responsive{
          max-height: 150px;
          overflow-y: scroll;  
        }
      </style>

  </head>

  <body >

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
         <h1 class="page-header" style="border-bottom-color: black;"><a href="studymaterial.php"><span class="glyphicon glyphicon-book"> </span> Study Material </a><small> Second Year</small></h1>
            


          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Computer Science and Enggineering</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped" >

                            <tr><td class="filterable-cell">Data Structures <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Discrete Mathematics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Digital Electronics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Web Technologies<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Mathematics III <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            <tr><td class="filterable-cell">Database Management & Systems <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            <tr><td class="filterable-cell">Object Oriented Programming & Design <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            <tr><td class="filterable-cell">Operating Systems <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            <tr><td class="filterable-cell">Statistical Modeling & Queuing Theory <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            <tr><td class="filterable-cell">Theory of Computation <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            
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
                       
                            <tr><td class="filterable-cell">Fluid Mechanics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Material Science<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Solid Mechanics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Engineering Thermodynamics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Industrial Engineering & Management<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>   
                            <tr><td class="filterable-cell">Engineering Mathematics III<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Applied Thermodynamics <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Kinematics of Machines<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Manufacturing Science I<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Mechanical Measurement & Control I<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
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
                       
                            <tr><td class="filterable-cell">Building Material and Construction<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>

                            <tr><td class="filterable-cell">Strength of Material<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Fluid Mechanics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Industrial Economics and Management <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Basic Surveying<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Building Material and Construction<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            
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
                       
                            <tr><td class="filterable-cell">Network Analysis & Synthesis<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Electrical Measurements and Measuring Instruments<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Signal & Systems<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Analog Electronics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Mathematics –III <a href="#"><br><small> class notes</small></a>|<a href="#"><small> exam papers</small></a></a>|<a href="#"><small> books</small></a></td></tr>   
                            <tr><td class="filterable-cell">Electrical Machines-I<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Electrical and Electronics Engineering Materials<a href="#"><br><small> class notes</small></a>|<a href="#"><small> exam papers</small>|<small> books</small></a></td></tr>
                            <tr><td class="filterable-cell">Electromagnetic Field Theory<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Digital Electronics I<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Microprocessors and Interfacing <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
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
                       
                            <tr><td class="filterable-cell">Analog Electronics Circuits <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Digital Electronics <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Measurement & Instrumentation  <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Signals & Systems  <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Network Analysis & Synthesis  <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Analog Integrated Circuits<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Microprocessors  <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Electromagnetic Field Theory 3 <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Analog Electronics Circuits <br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                            <tr><td class="filterable-cell">Industrial Economics & Management<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
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
                       
                             <tr><td class="filterable-cell">Bioanalytical Techniques<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Biochemistry<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Cell Biology<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Microbial Biotechnology<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Biostatistics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>  
                             <tr><td class="filterable-cell">Genetics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Immunotechnology<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Molecular Biology<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Programming Language<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
                             <tr><td class="filterable-cell">Biophysics<br><small><a href="#">Class notes</a></small> | <small><a href="#">Exam papers</a></small> | <small><a href="#">Books</a></small></td></tr>
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
 