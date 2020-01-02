
<?php if(!isset($_SESSION['login_name']) || $_SESSION['login_name']==''){ header('Location: admin.php');  } ?>



<!--head start-->
<!DOCTYPE html>
<html lang="en">
<html>
<head>

<title> megamall24 </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../css/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/css/bootstrap-theme.min.css">


<link rel="stylesheet" href="../css/style.css">






<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- slider style end -->
    <script type="text/javascript" src="keditor/sample.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<!-- slider style end -->
 
</head>    
<body>


<!--head start-->

<div class="container" style="position: relative;">
   
<div id="head_f">    
 <header id="navigation" style="background-color: #fff;">   
    <div class="container">
      
             <div class="col-md-3 col-sm-3 col-xs-8"> <div id="logo"> 
			 <a href="index.php"> <img src="../picture/logo.png"/> </a>

						<h4><a href="index.php" style="color: blue; float:left;"> Refresh </a></h4>
             
						<h4 class="logout" style="float:left;"><a href="admin.php?logout=yes">Logout</a></h4>

			 </div> </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-2"> 
                             
								<div class="head_line">
								   <h3 style="font-family:Segoe Script;">Electronics haat</h3>
								</div>
								   
                            </div> 
							<div class="col-md-6 col-sm-6 col-xs-2"> 
                               <div class="h_image">
									<img src="../picture/h_right.png" />
								</div>
                            

							                                  
 <nav class="navbar navbar-default" role="navigation" 
            style="float:right;">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav header_menu">
              <li>
              <a  class="active_a" href="index.php">Home</a></li>
              <li style="border-right:2px solid silver;">
              <a href="news.php">News</a></li>
              <li style="border-right:2px solid silver;">
              <a href="payments.php">Payments</a></li>
              
              <li style="border-right:2px solid silver;">
              <a href="contact.php">Contact</a></li>
              <li style="border-right:2px solid silver;">
              <a href="http://megamall24.com:2095/">Webmail</a></li>
             </ul>
           <!-- <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Help</a></li>
            </ul> -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

							</div>						
                            
                            
      
<!-- both clear start  -->
    <section id="slider"> </section>
<!-- both clear end  -->          
     
       
      </div>
  
       
 </header>
</div>
<!--head start-->


 

<!--head End-->