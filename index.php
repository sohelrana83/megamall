<?php include('lib/db.php') ?>
<?php include_once("lib/coun_db.php");?>




<!--head start-->
    <?php include('head.php')?>
<!--head start-->

<!--head start-->
    <?php include('slider.php')?>
<!--head start-->



<!-- body start  -->
<div id="body">
   
		<section id="team" class="team">
			<div class="container">  
			   <div class="row">
				  <!-- body Right start  -->  
					<div class="col-md-2 col-sm-2 col-xs-12"  style="box-shadow: 0px 1px 3px #A9A9A9;"> 
						
					<!-- Categories start -->
							<?php include('categories.php')?>
					<!-- Categories End -->
					
					</div>
					<!-- body Right End  -->
					
					<!-- body Mid start  -->
					<div class="col-md-8 col-sm-8 col-xs-12"> 
				 
					
					
					  <?php
            
           $i=0;
           if(isset($_GET['page'])){
						$cp = $_GET['page'];
					}else{
						$cp = 1;
					}
					
					
					$prevp = $cp-1;
					$nextp = $cp+1;
					
					$perpage =7;
					$start =($cp - 1) * $perpage;
					
					$res=mysql_query("select SQL_CALC_FOUND_ROWS * from product ORDER BY id DESC limit ".$start.",".$perpage);
					$rows_res = mysql_query("select FOUND_ROWS() as rows");
					$rows = mysql_fetch_array($rows_res);
					$totalrows = $rows['rows'];
					
					$lastpage = ceil($totalrows / $perpage);
					
					while($row=mysql_fetch_array($res))
					{ 
              if($row['picture']!='') $img='<img src="resources/picture/'.$row['picture'].'" width=100%;/>'; else $img='';
              
              if($i%2==0) { $cls='col'; } else { $cls='col1'; }
              echo '
				  
				  <a href="d1.php?action=d1&id='.$row['id'].'">
						<div class="all_p">      
							<div class="container">
								<div class="row">
								   <div class="col-md-2 col-sm-2 col-xs-12"> 
										'.$img.'
								   </div>
								   <div class="col-md-6 col-sm-6 col-xs-12"> 
								   
										<div class="row">
										
											<div class="col-md-9 row col-sm-9 row col-xs-12"> 
												<h4 style="color:#992284;"> '.$row['head_line'].'</h4>
													<p> Item Name: '.$row['item_name'].' </p>  
													 <p> Model No: '.$row['model_no'].' </p>   
												<h4 style="color: #E61E2A;"> Description :  </h4>
												<p style="color:black; text-align: justify;"> '.$row['s_discription'].'</p>  
											</div>
										   <div class="col-md-3 col-sm-12 col-xs-12"> 
												
												<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-6">
														<h5 style="color:black;">Regular Price  <br/> BDT  <del> '.$row['old_price'].' </del> </h5>
													</div>	
													<div class="col-md-12 col-sm-12 col-xs-6">
														<h5 style="color:red;"> <b> Special Price  <br/> BDT  '.$row['present_price'].' </b> </h5>
													</div>	
												</div>
														<p>Last Updated: </p>
														<p> '.$row['last_update'].' </p>
													
											</div> 
										</div>
								   </div>
							  </div> 
							</div>
						 </div>
						 
						 </a>
						 
						 '; $i++; }
						 
					  ?>
						 
						 <!-- Write End  -->
						 <!-- Start paging  -->
			   <?php include('paging.php');?>
						 
					</div>
					
			<!-- body Mid End  -->
			
					<!-- body Right Start  -->
					 <div class="col-md-2 col-sm-2 col-xs-12"> 
						<?php include('right.php')?>
					</div>
					<!-- body Right End  -->
                </div>
			</div> 
		</section>  
    
   
</div>      
<!-- body end -->


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- megamall24.com -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-4218442437009660"
					     data-ad-slot="8614498037"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					
					
<!--head start-->
    <?php include('footer.php')?>
<!--head start-->

    