<!--head start-->
    <?php include('head.php')?>
<!--head start-->



<!-- body start  -->
<div id="body">
  <div class="container-fluid" style="background:#fff;">   
		<section id="team" class="team">
			<div class="row">  
			  
			 <!-- body Right start  -->  
				<div class="col-md-2 col-sm-2 col-xs-12"  style="box-shadow: 0px 1px 3px #A9A9A9;"> 
					
				<!-- Categories start -->
						<?php include('categories.php')?>
				<!-- Categories End -->
				
                </div>
				<!-- body Right End  -->
				
				<!-- body Mid start  -->
				<div class="col-md-10 col-sm-10 col-xs-12"> 
					<div class="all_p">      
						 
                        
					 <!--Write start-->
										  
			                               <div class="col-md-6"> 
			                                    <div class="box_1 best_cuisine">
			                                    
			                                       <h4 style="line-height: 39px;">
												  <strong>Cash Payment System</strong><br>
												  <strong>Pay us in our office:</strong><br>
												  <strong> Modern IT    Limited</strong><br>
												   Alo Villa, House No: 22, Road No: S-7, Block: L <br>
												   Eastern Houseing, Second Phase, Mirpur, Dhaka-1216.<br>
												   Phone:    +88 01703-198174, 01846-488161, 01710-399011<br>
												  Website: www.modernitltd.com
												  </h4> <br/><br/><br/>
			                                    
			                                    </div>
			                                </div>
			                                
			                                 
                                            
                                            <div class="col-md-6">
                                            
                                                <div class="contact">
                                                    <?php
                                                    
                                                    $ok="";
                                                    $not_ok="";
                                                    if (isset($_POST['submit'])) {
                                                    	
                                                    	
                                                    	$name = $_POST['name'];
                                                        $email = $_POST['email'];
                                                        $message = $_POST['message'];
                                                        $from = 'From: http://megamall24.com/'; 
                                                        $to = 'cmtsheikeshadi@gmail.com'; 
                                                        $subject = 'Email Inquiry';
                                                    
                                                        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                                                    	
                                                        if (mail ($to, $subject, $body, $from)) { 
                                                            $ok= '<p>Thank you for your email!</p>';
                                                        } else { 
                                                            $not_ok= '<p>Oops! An error occurred. Try sending your message again.</p>'; 
                                                        }
                                                    }
                                                    ?>
    
                                                
													<form action="contact.php" method="post" enctype="multipart/form-data">
    	        
														<div class="form" style="width:275px;">
                                                            <h3> <?php echo $ok ;?> </h3>
                                                            <h3> <?php echo $not_ok ;?> </h3>
                                                    
													
                                            	        <h1 class="title">Contact Form</h1>
															<div class="input-group">    
																 
																<input class="form-control" name="name" required="required" placeholder="Your Name"/>
																<input class="form-control" name="email" type="email" required="required" placeholder="Your Email"/>
																
																<textarea class="form-control" name="message" cols="20" rows="5" required="required" placeholder="Message"></textarea>
																		
																<input class="form-control" id="submit" name="submit" type="submit" value="Submit">
																<input class="form-control" id="cancel" name="cancel" value="Cancel" />
															
															</div>
														</div>
														
                                            	    </form>
                                                </div>
                                            </div> <br/> <br/>
											
											<div class="col-md-12 col-sm-12 col-xs-12"> 
												 
												 <div class="row">
														<div class="span11">
														  <div id="map"></div>
														</div>
														<div class="span6">
														  
														</div>
												</div> <br/> <br/> <br/>
												 
											</div>
                        
                              <!--Write End-->      
						
                          
					</div>
				</div>
		<!-- body Mid End  -->
        
                <!-- body Right Start  -->
        		 
                <!-- body Right End  -->
                
			</div> 
		</section>  
   </div> 
   
</div>      
<!-- body end -->

<!--head start-->
    <?php include('footer.php')?>
<!--head start-->

    