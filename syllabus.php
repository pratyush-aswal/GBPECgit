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
          background-image:url('data/syll.jpg');
          margin-top:30px;
        }
        h4{
          color:grey;
        }
        h3{
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
      <div class="row" >
        <h3 class="page-header"><span class="glyphicon glyphicon-pencil"></span> Syllabus</h3>
      
      <div class="col-lg-6">
        <table class="table table-bordered table-hover">
        <tr><td><h4>Mechanical Enggineering <small><a href="http://www.gbpec.ac.in/departments/course_btech_me.pdf">B.Tech.</a></small></h4></td></tr>
        <tr><td><h4>Civil Enggineering <small><a href="http://www.gbpec.ac.in/departments/course_btech_ce.pdf">B.Tech.</a></small></h4></td></tr>
        <tr><td><h4>Electrical Enggineering <small><a href="http://www.gbpec.ac.in/departments/course_btech_ee.pdf">B.Tech.</a></small></h4></td></tr>
        <tr><td><h4>Electronics Enggineering <small><a href="http://www.gbpec.ac.in/departments/course_btech_ece.pdf">B.Tech.</a></small>|<small> <a herf="http://gbpec.ac.in/departments/course_mtech_ece.pdf">M.Tech. </a></small>|<small><a href="http://www.gbpec.ac.in/departments/course_phd_ece.pdf"> Ph.D.</a> </small></h4></td></tr>
        
        <tr><td><h4>Production Enggineering <small><a href="http://www.gbpec.ac.in/departments/course_btech_pe.pdf">B.Tech.</a></small>|<small><a href="http://www.gbpec.ac.in/departments/course_mtech_me.pdf"> M.Tech.</a> </small></h4></td></tr>
        </table>
      </div>
      <div class="col-lg-6">
          <table class="table table-bordered table-hover">
        
        <tr><td>
          <h4>Biotechnology
              <small><a href="http://gbpec.ac.in/departments/course_btech_bt.pdf">B.Tech.</a></small>|
              <small> <a href="http://gbpec.ac.in/departments/course_mtech_bt.pdf">M.Tech.</a></small>|
              <small><a href="http://gbpec.ac.in/departments/course_phd_bt.pdf"> Ph.D.</a> </small>
          </h4>
        </td></tr>
        

        <tr><td>
          <h4>Computer Science Enggineering 
              <small><a href="http://www.gbpec.ac.in/departments/course_btech_cse.pdf">B.Tech.</a></small>|
              <small> <a href="http://www.gbpec.ac.in/departments/course_mtech_cse.pdf">M.Tech.</a> </small>|
              <small><a href="http://www.gbpec.ac.in/departments/course_phd_cse.pdf"> Ph.D.</a> </small>
          </h4>
        </td></tr>
        
        <tr><td>
          <h4>Masters of Ccomputer Application 
              <small><a href="http://www.gbpec.ac.in/departments/course_mca.pdf">Sallybus</a></small> |
              <small><a href="http://gbpec.ac.in/departments/revised%20sylabbus%202017-2020%20final%20for%20printing.pdf">New Sallybus</a></small> 
          </h4>
        </td></tr>

        <tr><td><a href="http://www.gbpec.ac.in/departments/course_btech_ash.pdf"><h4>Applied Science and Humanities</h4></a></td></tr>
        <tr><td><a href="#"><h4>UTU Syllabus</h4></a></td></tr>
        </table>
      </div>
      <!--div class="col-lg-3">
          <h3 class="page-header"><span class="glyphicon glyphicon-list"></span> Quick Links</h3>
          
          <ul class="list-group">
             <li class="list-group-item active" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-pencil"></span>  Syllabus for all branches.</li>
            <a href="data/ac.jpg"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-calendar"></span> Academic Calendar.</li></a>
            <a href="https://play.google.com/store/apps/details?id=gbpec.snapup" target="blank"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-tags"></span> Snap-Up : Market at your doorstep.</li></a>
            <a href="https://www.youtube.com/channel/UCYLdkxVujZ43F4LwKvCNsMQ" target="blank"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-option-vertical"></span> Third Button Studios</li></a>
            <a href="archives.php"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-paperclip"></span> Archives</li></a>
            
            </ul>
          </div-->
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
