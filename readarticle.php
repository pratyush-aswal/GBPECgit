<!DOCTYPE html>
<html>
<head> 

            <?php
                $handle = fopen("data/header.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
                fclose($handle);
            ?>
    <style type="text/css">
            <?php
                $handle = fopen("data/style.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
                fclose($handle);
            ?>
            .well>h3{
              font-size: 35px;
              text-transform: uppercase;
              border-bottom: 2px solid black;
            }
            .well>p{
              font-size: 18px;
              text-indent: 90px;
              margin-top: 20px;
            }
            
    </style>
</head>


             <?php
                $handle = fopen("data/nav.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
<body>

<div class="container" style="margin-top: 100px;">
  <div class="row">
    <div class="col-lg-9">
      <div class="well">
      <?php
        $filepath = "article/".$_GET["filename"].".txt";
        
        $handle = fopen($filepath, "r"); 
        $lineNumber = 1;     
            while ( $line = fgets( $handle ) ) { 
                echo ($line); 
            }
            fclose($handle);
      ?>
      </p>
        </div>
      </div>
      <div class="col-lg-3">
          <div class="side">
            <div class="list-group">
              <?php
                $handle = fopen("data/articlelist.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 
                        $lenofstr = strlen($line);
                        $posh3 = strrpos($line, "<h3>")+4;
                        $posh3e = strrpos($line, "</h3>");
                        $reqlen = $posh3e - $posh3;
                          $title = trim(substr($line, $posh3, $reqlen));
                          /*if(trim(str_replace($_GET["filename"], "-", " ")) == trim($title)){
                            echo "fuck";
                          }
                          else{
                            echo "suck";
                          }*/
                        $poshref = strrpos($line, "href");
                        $posrole = strrpos($line, "role='button'>View details &raquo;</a></p></div>");
                        $reqlen1 = $posrole - $poshref;
                          $link = substr($line, $poshref, $reqlen1);

                        echo("<a ".$link."><span class='list-group-item'>".substr($line, $posh3, $reqlen)."</span></a>");
                        
                       
                    }
                    fclose($handle);
              ?>

              </div>
            <a href="archives.php"><div class="btn btn-primary col-lg-12">Return to archives</div></a>
            </div>
      </div>
    </div>
  </div>
           
 	
	
		
</div>

</body>

        <?php
            $handle = fopen("data/footer.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
</html>