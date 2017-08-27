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
         <h1 class="page-header" style="border-bottom-color: black;"><a href="studymaterial.php"><span class="glyphicon glyphicon-book"> </span> Study Material </a><small> First Year</small></h1>
         <div class="col-lg-6">
         <ul class="list-group">
         <h3>Exam Papers</h3>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqVTRhRXVib1BieVU"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Physics Sem</li></a>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqUXdpT3dLekxCUlk"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Chemistry Sem</li></a>
         </ul>
            <!--ul class="list-group">
            <a href="physics.html"><li style="margin:-1px;border-radius: 0px;" class="list-group-item">Physics</li></a>
            <a href="electrical.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Electrical</li></a>
            <a href="electronics.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Electronics</li></a>
            <a href="math1.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Mathematics-I</li></a>
            <a href="pc.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Professional Communication</li></a>
            </ul>
            <!--table class="table table-bordered table-hover">
              <tr><td><a href="physics.html">Physics</a></td></tr>
              <tr><td><a href="electrical.html">Electrical</a></td></tr>
              <tr><td><a href="electronics.html">Electronics</a></td></tr>
              <tr><td><a href="math1.html">Mathematics-I</a></td></tr>
              <tr><td><a href="pc.html">Professional Communication</a></td></tr>
           </table-->
        </div> 
          <div class="col-lg-6">
           <ul class="list-group">
         <h3>PDFs</h3>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqY2JVTnhNblI1N2c"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">EVS book PDF</li></a>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqdTVPVWs2eFNoaHM"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Mechanical</li></a>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqMUxyaThJblBwVlk"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Physics (Notes) </li></a>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqLU9PY1lyTDR6cVU"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Chemistry H.Goel (Notes)</li></a>
         <a href="https://drive.google.com/open?id=0B6RJ0q8sGFcqVVY4d0Y2ZmNuaG8"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Electrical</li></a>
         </ul>
         
           <!--ul class="list-group">
            <a href="physics.html"><li style="margin:-1px;border-radius: 0px;" class="list-group-item">Chemistry</li></a>
            <a href="electrical.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Basic Mechanical Engg.</li></a>
            <a href="electronics.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Basic Computer Engg.</li></a>
            <a href="math1.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Mathematics-II</li></a>
            <a href="pc.html"><li class="list-group-item" style="margin:-1px;border-radius: 0px;">Environmental Studies</li></a>
            </ul>
            <!--table class="table table-bordered table-hover">
              <tr><td><a href="chemistry.html">Chemistry</a></td></tr></tr>
              <tr><td><a href="mechanical.html">Basic Mechanical Engg.</a></td></tr>
              <tr><td><a href="computer.html">Basic Computer Engg.</a></td></tr>
              <tr><td><a href="maths2.html">Mathematics-II</a></td></tr>
              <tr><td><a href="evs.html">Environmental Studies</a></td></tr>
            </table-->
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
