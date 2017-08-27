<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">

    <title>GBPECGuide</title>

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/indexpage.css">
      <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <script src="js/ie-emulation-modes-warning.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
  
  <body>
  


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span class="navbar-brand">GBPEC Guide</span>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="studymaterial.php"><span class="glyphicon glyphicon-book"></span> Academics</a></li>
        <li><a href="higherstudies.php"><span class="glyphicon glyphicon-education"></span> Higher Studies</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right" style="margin-right:50px;">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-list"></span> Quick Links <span class="caret"></span></a>
          <ul class="dropdown-menu">
                      
           <li id="quick"> <a href="Syllabus.php"><span class="glyphicon glyphicon-pencil"></span>   Syllabus for all branches.</a></li>
           <li id="quick"> <a href="data/ac.jpg"><span class="glyphicon glyphicon-calendar"></span> Academic Calendar.</a></li>
           <li id="quick"> <a href="https://play.google.com/store/apps/details?id=gbpec.snapup" target="blank"><span class="glyphicon glyphicon-tags"></span> Snap-Up : Market at your doorstep.</a></li>
           <li id="quick"> <a href="https://www.youtube.com/channel/UCYLdkxVujZ43F4LwKvCNsMQ" target="blank"><span class="glyphicon glyphicon-option-vertical"></span> Third Button Studios</a></li>
           <li id="quick"> <a href="archives.php"><span class="glyphicon glyphicon-paperclip"></span> Archives</a></li>
          <li id="quick"> <a href="loginpage.php"><span class="glyphicon glyphicon-user"> </span> Admin Login</a></li>            

          </ul>
        </li> 
      </ul>
    </div>
  </div>
</nav>
    

<div class="bgimg-1">

        <!--div class="container">
          <div class="masthead clearfix">
                  
                  <div class="inner">
                    <h3 class="masthead-brand">GBPEC Guide</h3>
                    <nav>
                      <ul class="nav masthead-nav">
                          <li class="active"><a href="index.html">Home</a></li>
                          <li><a href="studymaterial.html">Academics</a></li>
                          <li><a href="higherstudies.html">Higher Studies</a></li>
                      </ul>
                    </nav>
                 </div>
              
          </div>
        </div-->

      
      <div class="caption">
          <span class="border" style="opacity: 1;color:black;">WELCOME</span>
      <div class="container">
      
      <div class="col-lg-12" style="margin-top: 50px;">
        <h4 style="opacity: 1; color:black;font-weight: 600;letter-spacing: 0px;">A Website fully related to the college news, events, technical seminars along with previous year papers &amp enginnering notes. Join us to get the bet curated content & to be update with college news. GBPEC-help guide: Happy to Help.</h4>
      </div>
    </div>
      </div>
    </div>



    <div style="position:relative;">
      <div style="color:#ddd;background-color:#282E34;text-align:center;padding-top:30px;padding-bottom:70px;text-align: justify; min-height:350px;">
        <div class="container">
           <ul class="list-group"><h3>Updates</h3>
           <?php
                $handle = fopen("data/updates.txt", "r"); 
                $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 
                     echo ("<li class='list-group-item'>");
                     echo ($line); 
                     echo ("</li>");
                   }             
                fclose($handle);
              ?>
            </ul>
        </div>
      
    </div>
    </div>
    <div class="bgimg-2">
      <div class="caption">
        <span class="border" style="background-color:white;opacity: 0.6; font-size:25px;color: black;border-color: black;">ARTICLES</span>
      </div>
    </div>

    <div style="position:relative;">
      <div style="color:#ddd;background-color:#282E34;text-align:center;padding-top:30px;padding-bottom:70px;text-align: justify; min-height:300px;">
        <div class="container">
              <div class="row">
              <?php
                    $handle = fopen("data/articlelist.txt", "r"); 
                    $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                      }             
                    fclose($handle);
              ?>
                
              </div>
              <hr>
            <div class="row">
              <div class="col-lg-12" style="margin:0px;">
              <p class="text-muted">Developed by <a href="heroparty.php">Hero Party.</a></p>
              </div>
            </div>    
      </div>
      
      </div>
    </div>

   
  </body>
</html>
