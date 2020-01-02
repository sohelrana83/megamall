<!--head start-->
<!DOCTYPE html>
<html lang="en">
<html>
<head>


<title> megamall24 </title>

<meta charset="utf-8">
<link rel="shortcut icon" href="picture/logo_h.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/menu.css"> 
<link rel="stylesheet" type="text/css" href="css/footer.css">
 
 
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />




<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/selectnav.js"> </script>

<!--========================menu script Start-->
<script src="css/js/script.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
<!--===========================menu script End-->

 
 <!--=====================Google map script Start-->
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="css/js/gmaps.js"></script>
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/examples.css" />
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: 23.7970659,
        lng: 90.3731031
      });
      //locations request
      map.getElevations({
        locations : [[23.7970659,90.3731031]],
          callback : function (result, status){
          if (status == google.maps.ElevationStatus.OK) {
            for (var i in result){
             map.addMarker({
              lat: result[i].location.lat(),
              lng: result[i].location.lng(),
              title: 'Marker with InfoWindow',
              infoWindow: {
                content: '<p>The elevation is '+result[i].elevation+' in meters</p>'
              }
            });
           }
          }
        }
      });    
    });
  </script>
  <!--=====================Google map script End-->
 
 
</head>    
<body>

<div id="wreaper">
<!--head start-->

<div class="container" style="position: relative;  box-shadow: 0px 1px 15px #A9A9A9;"">
   
<div id="head_f">    
 <header id="navigation" class="navbar-fixed-top navbar" style="background-color: #fff;">   
    <div class="container">
      
		<div class="row">
		
             <div class="col-md-3 col-sm-3 col-xs-5"> 
				 <div id="logo"> 
					<a href="index.php"> <img src="picture/logo.png" width="80%"/> </a> 
				 </div> 
			 </div>
                            
			<div class="col-md-9 col-sm-9 col-xs-7"> 
				 
				 <div id='cssmenu' style="float: right; background:#fff;">
					<ul>
					   <li><a href='index.php'>Home</a></li>
					  
					<!--  <li class='active has-sub'><a href='#'>Products</a>
						  <ul>
							 <li class='has-sub'><a href='#'>Product 1</a>
								<ul>
								   <li><a href='#'>Sub Product</a></li>
								   <li><a href='#'>Sub Product</a></li>
								</ul>
							 </li>
							 <li class='has-sub'><a href='#'>Product 2</a>
								<ul>
								   <li><a href='#'>Sub Product</a></li>
								   <li><a href='#'>Sub Product</a></li>
								</ul>
							 </li>
						  </ul>
					   </li>-->
					  
					  <li><a href='news.php'>News</a></li>
					  <li><a href='payments.php'>Payments</a></li>
					  <li><a href='sister_concern.php'>Sister Concern</a></li>
					  <li><a href='contact.php'>Contact</a></li>
					  <li><a href='http://megamall24.com:2095/' target="_blank">Webmail</a></li>
					  
					</ul>
							
					 </div> 
			</div>  
			
                            
      
<!-- both clear start  -->
    <section id="slider" style="height: 5px; background-image:url('picture/h_b.png'); width:100%;"> </section>
<!-- both clear end  -->          
      
            
        </div>      
       
      </div>
      
      
     
      
      
      
      
      
       
 </header>
</div>
<!--head start-->


<!-- both clear start  -->
    <section id="slider" style="height: 80px;"> </section>
<!-- both clear end  -->  

<!--head End-->