<?php include('lib/db.php'); ?>




<?php include('head.php') ?>
        
        
<!-- both clear start  -->
<section id="slider" style="width: 15%;"> </section>
<!-- both clear end  -->
        
 <div class="container">       
        <!-- body start  -->
                
           
           
<?php 

if(isset($_GET['id'])){
    
   $id=$_GET['id'];
   
   
  
      
   $result=mysqli_query($con,"SELECT * FROM `product` WHERE `id`='$id'");
                  
                                           
                         while($row=$result->fetch_assoc()){
        
                        if($row['picture']!='') $img='<img src="http://megamall24.com/resources/picture/'.$row['picture'].'" width=100%;/>'; else $img='';
                        
                       
                                             
        echo '
                                        


           
              <!-- body start  -->
        
     <br/>
        <h3 style="color:#97CC09"> '.$row['head_line'].' </h3>
		<p>Last Update: '.$row['last_update'].' </p>
            
            <div class="col-md-5">
                
                '.$img.'
                                                 
               
                
            </div>
            
			
			
            <div class="col-md-7">
                
                 
				 <h3 style="color:#97CC09;font-size: 36px;">Summery: </h3>
                <h4 style="color:#DB5226"> Model No: '.$row['model_no'].' </h4>
				
                <h3 style="color: #ff910f;"> Regular Price: <button type="button" class="btn btn-danger"> <del> '.$row['old_price'].' </del></button>  </h3>
                
                <h3 style="color:#4CA44C;"> Special Price: <button type="button" class="btn btn-success">'.$row['present_price'].'</button> </h3>
                
                 <a href="from.php" class="buy" role="button"><i class="fa fa-credit-card"></i>&nbsp; Buy Now </a><br /><br />
				 <h3 style="color:#97CC69;text-decoration:underline;">Facility:</h3>
				 
                <p><i class="fa fa-check"></i> &nbsp;&nbsp; Full intact and new product.</p>
                <p><i class="fa fa-check"></i>&nbsp;&nbsp; Free Delivery In Dhaka City.</p>
                <p><i class="fa fa-check"></i> &nbsp;&nbsp; Payment on delivery.</p>
                <p><i class="fa fa-check"></i>&nbsp;&nbsp; Returns within 3 days Money back Grunty.</p>
                <p><i class="fa fa-check"></i>&nbsp;&nbsp; We are importing number one product (Directly).</p>
                
				<div class="icon">
					<a href="https://www.facebook.com/mdraju.molla"><i class="largeicon fa fa-facebook"></i></a>
					<a href="https://twitter.com/rajucmt6"><i class="largeicon fa fa-twitter"></i></a>
				</div>
            </div> 
		 
		 	<div class="col-md-12">
				<h2 style="color:#97CC09; text-align:left">Full Description: </h2>
				<p style="text-align: left;"> '. $row['description'].' </p>
		        </div> 
       </div> 
       
        <!-- body end -->
            
';
}

}
?>
            
          
          
             
<!-- both clear start  -->
    <section id="slider" style="height: 115px;"> </section>
<!-- both clear end  -->          
   
          
           
        <!-- body end -->
    
        <!-- footer start  -->
        
        <?php include ('footer.php')?>
        
        <!-- footer end  -->
        
        
  