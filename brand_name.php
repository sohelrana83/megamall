<?php include('lib/db.php'); ?>




<!--head start-->
    <?php include('head.php')?>
<!--head start-->

<!--head start-->
    <?php include('slider.php')?>
<!--head start-->



<!-- body start  -->
<div id="body">
  <div class="container-fluid" style="background:#fff;">   
		<section id="team" class="team">
			<div class="container">  
			  
			  <!-- body Right start  -->  
				<div class="col-md-2 col-sm-2 col-xs-4"> 
					
				<!-- Categories start -->
						<?php include('categories.php')?>
				<!-- Categories End -->
				
                </div>
				<!-- body Right End  -->
				
				<!-- body Mid start  -->
				<div class="col-md-8 col-sm-8 col-xs-8"> 
				
                 <!-- Write End  -->
                <?php
				
				if(isset($_GET['p_c'])){
					
					$p_c=$_GET['p_c'];
					
					
					echo $p_c;
				 
           $i=0;
           $all_news = mysqli_query($con,"SELECT * FROM `product` WHERE brand_name = '$p_c' ORDER BY id DESC ");
           
           while($row = $all_news->fetch_assoc()) 
           {  
              if($row['picture']!='') $img='<img src="http://megamall24.com/resources/picture/'.$row['picture'].'" width=100%;/>'; else $img='';
              
              if($i%2==0) { $cls='col'; } else { $cls='col1'; }
              echo '
              
               <a href="d1.php?action=d1&id='.$row['id'].'">
                	<div class="all_p">      
						<div class="container">
                        
							   <div class="col-md-2 col-sm-2 col-xs-10"> 
									'.$img.'
							   </div>
							   <div class="col-md-6 col-sm-6 col-xs-12"> 
						            
									<div class="col-md-9 row col-sm-9 row col-xs-12"> 
										<h4 style="color:#4FB230;"> '.$row['head_line'].'</h4>
								        	<p> Item Name: '.$row['item_name'].' </p>  
									         <p> Model No: '.$row['model_no'].' </p>   
										<h4 style="color: #E61E2A;"> Description :  </h4>
										<p style="color:black; text-align: justify;"> '.$row['s_discription'].'</p>  
									</div>
								   <div class="col-md-3 col-sm-12 col-xs-12"> 
									  
										<h5 style="color:black;">Regular Price  <br/> BDT  <del> '.$row['old_price'].' </del> </h5>
                                       						<h5 style="color:red;"> <b> Special Price  <br/> BDT  '.$row['present_price'].' </b> </h5>
										<p>Last Updated: </p>
										<p> '.$row['last_update'].' </p>
                               	   				  </div> 
							    
							   </div>
						  </div>  
					 </div>
                     
                     </a>
                     
                     '; $i++; } }
                     
                  ?>
                     
                     
                     
                     <!-- Write End  -->
                     
				</div>
                
		<!-- body Mid End  -->
        
                <!-- body Right Start  -->
				
        		 <div class="col-md-2 col-sm-2 col-xs-12"> 
					<?php include('right.php')?>
				</div>
                <!-- body Right End  -->
                
			</div> 
		</section>  
   </div> 
   
</div>      
<!-- body end -->

<!--head start-->
    <?php include('footer.php')?>
<!--head start-->

    