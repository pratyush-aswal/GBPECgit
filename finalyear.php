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
         <h1 class="page-header" style="border-bottom-color: black;"><a href="studymaterial.php"><span class="glyphicon glyphicon-book"> </span> Study Material </a><small> Final Year</small></h1>
            


          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Computer Science and Enggineering</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">

                            <tr>
                                <td class="filterable-cell">
                                  Computer Graphics and Animation <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                            
                            <tr>
                                <td class="filterable-cell">
                                  Advanced Computer Architecture  <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                 Advance Database Managment System <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Elective-I <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                 Elective-II <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Adhoc Networks <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Embedded Systems <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Electve-III <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Elective-IV <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                            
                            
                            
                            
                            
                            
                            
                            
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
                       
                            <tr>
                                <td class="filterable-cell">
                                CAD/CAM<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Energy Conservation <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                            Mechanical Vibrations <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  ELective-I <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Elective-II <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Elective-II <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Automobile Engineering <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                  Power Plant Engineering<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                 Elective-III <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                              <tr>
                                <td class="filterable-cell">
                                 Elective-IV <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                         </table>
                      </div>
                    </div>
            
            </div>
          </div>
        
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Civil Engg.</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>   
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">Exam Papers</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">Study Notes</a></td></tr>
                            <tr><td class="filterable-cell"><a href="#">E-books</a></td></tr>
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
                <h3 class="panel-title">Electrical Engg.</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                             <tr>
                                <td class="filterable-cell">
                                  Electric Drives <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Power System Transients <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                 Power System Operation and Control <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-I <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Industrial Economics & Management <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                   Instrumental Engineering<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Power Quality <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-II <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-III <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                         </table>
                      </div>
                    </div>
              </div>
          </div> 
          
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Electronics Engg.</h3>
              </div>

                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                       
                             <tr>
                                <td class="filterable-cell">
                                   Optical Communication<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  VLSI Design <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Digital System Design using VHDL <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Data ccommunication network <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-I <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                 Electronic Switching system <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Satellite Communication<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                 Television Engineering <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-II <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
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
                       
                              <tr>
                                <td class="filterable-cell">
                                   Plant biotechnology<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Animal Biotechnology <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Downstream Processing<br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-I <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Elective-II <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>

                                <tr>
                                <td class="filterable-cell">
                                 Food biotechnology <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                  Biotechnology and Enterpreneurships Development <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                 Elective-III <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                                <tr>
                                <td class="filterable-cell">
                                 Elective-IV <br>
                                  <small> 
                                      <a href="#">Class notes </a>
                                  </small>|
                                  <small> 
                                      <a href="#">Exam papers </a>
                                  </small>|
                                  <small> 
                                      <a href="#">E-Books </a>
                                  </small> 
                                </td>
                              </tr>
                         </table>
                      </div>
                    </div>
            
            </div>
          </div>
      
          
          
      
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Developed by <a href="heroparty.php">Hero Party.</a></p>
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
 