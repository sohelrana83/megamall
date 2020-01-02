


<?php include('head.php') ?>
     
        
<!-- both clear start  -->
<section id="slider" style="width: 15%;"> </section>
<!-- both clear end  -->
        
  <section id="slider" style="height: 10px;"> </section>      
        <!-- body start  -->
        
         <section id="team"> 
             <div class="container">  
                
                
                
                 
                <div class="alert alert-success">
                        <strong>Home Service</strong> Contact
                </div>
            
            <h2 style="color: #FF8040;"> Kazi Towhidur Razaque </h2> 
            			<h3> Phone No: 01919-039839, 01717-039839  </h3>
            			
            <h2 style="color: #FF8040;"> Maruf Hossen </h2> 
            			<h3> Phone No: 01924-633770  </h3>
            			
            	<hr/>
            
           
        
                
                
                
                 
                
                
                
                <div class="col-md-3"></div>
                <div class="col-md-6">
                
                
                 <section class="body">
    
    
    						<?php
                                                    
                                                    $ok="";
                                                    $not_ok="";
                                                    if (isset($_POST['submit'])) {
                                                    	
                                                    	
                                                    	$name = $_POST['name'];
                                                        $email = $_POST['email'];
                                                        $message = $_POST['message'];
                                                        $from = 'From: http://megamall24.com/'; 
                                                        $to = 'megamall24bd@gmail.com'; 
                                                        $subject = 'Email Inquiry';
                                                    
                                                        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                                                    	
                                                        if (mail ($to, $subject, $body, $from)) { 
                                                            $ok= '<p>Thank you for your email!</p>';
                                                        } else { 
                                                            $not_ok= '<p>Oops! An error occurred. Try sending your message again.</p>'; 
                                                        }
                                                    }
                                                    ?>
    
    
	    <form action="" method="post" enctype="multipart/form-data">
	        
	        <h1 class="title">Contact</h1>
	        
	        
	        <div class="form-group">
		    <label></label>
		    <input name="name" required="required" placeholder="Your Name">
		</div>    
		
		
		<div class="form-group">            
		    <label></label>
		    <input name="email" type="email" required="required" placeholder="Your Email">
		</div>
		            
		<div class="form-group">    
		    <label></label>
		    <textarea name="message" cols="20" rows="5" required="required" placeholder="Message"></textarea>
		</div> 
		    
		 <div class="form-group">   		    
		    <input id="cancel" name="cancel" value="Cancel" />
		           
		    <input id="submit" name="submit" type="submit" value="Submit">
	         </div>
	        
	    </form>

    </section>
                
                 
                
                </div>
                
                 
                 
        
  
        
        
        </section>
        <!-- body end -->
    
        <!-- footer start  -->
        
        <?php include ('footer.php')?>
        
        <!-- footer end  -->
        
        
  