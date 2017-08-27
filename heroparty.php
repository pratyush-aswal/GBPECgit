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
          margin-top:50px;
          background-image:url('data/hero.jpg');
        }
        .border{
          border:1px solid lightgrey;
          border-radius: 4px;
          margin:2px;
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
      <div class="col-lg-9 col-md-9 col-sm-9">
          <h3>Web Developers</h3><hr>
          <address>
            <strong>Shubham Giri</strong><br>
            III<sup>rd</sup> year, Civil Enggineering.<br>
            
          </address>
          <address>
            <strong>Abhishek Singh</strong><br>
            II<sup>nd</sup> year, Civil Enggineering.<br>
            <a href="mailto:aks3555@gmail.com">aks3555@gmail.com</a>
          </address>
          <address>
            <strong>Pratyush Aswal</strong><br>
            II<sup>nd</sup> year, Computer Science & Enggineering.<br>
            <a href="mailto:pratyush1997.aswal@gmail.com">pratyush1997.aswal@gmail.com</a>
          </address>  
          <address>
            <strong>Jatin Jeena</strong><br>
            II<sup>nd</sup> year, Computer Science & Enggineering.<br>
            <a href="mailto:jatin1999jeena@gmail.com">jatin199jeena@gmail.com</a>
          </address>  
          <address>
            <strong>Naman Kumar</strong><br>
            II<sup>nd</sup> year, Computer Science & Enggineering.<br>
            <a href="mailto:naman233848@gmail.com">naman233848@gmail.com</a>
          </address>  
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
