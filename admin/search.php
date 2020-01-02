<?php include('../lib/db.php'); ?>

<?php

 $success="";
 $error="";
 
   if(isset($_POST['submit'])){
    
    $id = post_data('product','id');
     
     if(isset($_FILES["picture"])){ 
       
       if(isset($_POST['id'])) $id=$_POST['id'];
         
       $file_name = "product_".$id.'_'.$_FILES["picture"]['name'];
       $target_file = '/home/megamall24/public_html/resources/picture/'.$file_name;
       if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
          mysqli_query($con,"UPDATE product SET picture='$file_name' WHERE id='$id'");
       } 
     }
     
     if(isset($_FILES["d_picture"])){ 
       
       if(isset($_POST['id'])) $id=$_POST['id'];
         
       $file_name = "product_".$id.'_'.$_FILES["d_picture"]['name'];
       $target_file = '/home/megamall24/public_html/resources/picture/'.$file_name;
       if (move_uploaded_file($_FILES["d_picture"]["tmp_name"], $target_file)) {
          mysqli_query($con,"UPDATE product SET d_picture='$file_name' WHERE id='$id'");
       } 
     }
       
 
     if($id){
        $success = "Succfully student added!";
     } else {
         $error = "student already added";
     }
  }
  
  if(isset($_GET['action']) && $_GET['action']=='edit'){
     $id = $_GET['id'];
     $result = mysqli_query($con,"SELECT *FROM product WHERE id='$id'");           
     $edit = $result->fetch_assoc();
  } else if(isset($_GET['action']) && $_GET['action']=='delete'){
     $id = $_GET['id'];
     mysqli_query($con,"DELETE FROM `product` WHERE id='$id'");                 
  }
?>





<!--head start-->
    <?php include('a_head.php')?>
<!--head start-->

  

<!-- body start  -->
<div id="body">
  <div class="container-fluid" style="background:#fff;">   
		<section id="team" class="team">
			<div class="container">  
			  
			  <!-- body Right start  -->  
				<div class="col-md-2 col-sm-2 col-xs-4"> 
					
				<!-- Categories start -->
						<?php include('a_categories.php')?>
				<!-- Categories End -->
				
                </div>
				<!-- body Right End  -->
				
				<!-- body Mid start  -->
				<div class="col-md-10 col-sm-8 col-xs-8"> 
				
				<div class="all_p">      
						<div class="row">
							   <div class="col-md-12">
                                        
                                        <?php echo $success; ?>
                                        <?php echo $error; ?>
                                 
                                        <h1> Product Add </h1>
                                      
                                     <table border="1px" class="table-hover">
                                        <form action="#" method="post" enctype="multipart/form-data">   
                                         
                                            <tr><td> Product Categories: </td> <td>
                                                                                <select name="categories">
                                                                                    <option> LED Television </option>
                                                                                    <option> Refrigerator </option>
                                                                                    <option> Fridge </option>
                                                                               	    <option> Air Conditioner </option>
                                                                                    <option> Desktop Computer </option>
                                                                                    <option> Laptop </option>
                                                                                    <option> Tablet </option>
																					<option> Printer Cartridge </option>
                                                                                    <option> IPS </option>
                                                                                    <option> Air Conditioners </option>
                                                                               	    <option> Energy Saving Lamp </option>
                                                                                    <option> Blender </option>
                                                                                    <option> Rice Cooker </option>
                                                                                    <option> Shaver </option>
																					<option> Epilator </option>
																					<option> Trimmer </option>
																					<option> Microw Oven </option>
																				</select> </td> </tr>
																				
											<tr><td> Brand Name </td> <td>
                                                                                <select name="categories">
                                                                                    <option> Sony </option>
                                                                                    <option> Samsung </option>
                                                                                    <option> Sony </option>
                                                                               	    <option> Rangs </option>
                                                                                    <option> Philips </option>
                                                                                    <option> Sharp </option>
                                                                                    <option> Panasonic </option>
																					<option> General </option>
                                                                                    <option> Whirlpool </option>
                                                                                    <option> Hitachi </option>
                                                                               	    <option> Microw Oven </option>
                                                                                    <option> Walton </option>
                                                                                    <option> Atasih </option>
                                                                                    <option> Boss </option>
																				</select> </td> </tr>
                                                                                     
                                            <tr><td> Head Line </td> <td> <input type="text" name="head_line" value="<?php if(isset($edit['head_line'])) echo $edit['head_line']; ?>"/> </td></tr> 
                                            <tr><td> Item Name: </td> <td> <input type="text" name="item_name" value="<?php if(isset($edit['item_name'])) echo $edit['item_name']; ?>"/> </td></tr>
                                            <tr><td> Model No: </td> <td> <input type="text" name="model_no" value="<?php if(isset($edit['model_no'])) echo $edit['model_no']; ?>"/> </td></tr>
                                            <tr><td> Old Price </td> <td> <input type="text" name="old_price" value="<?php if(isset($edit['old_price'])) echo $edit['old_price']; ?>"/> </td></tr>
                                            <tr><td> Present Price </td> <td> <input type="text" name="present_price" value="<?php if(isset($edit['present_price'])) echo $edit['present_price']; ?>"/> </td></tr>
                                            <tr><td> last updated Date: </td> <td> <input type="text" name="last_update" value="<?php if(isset($edit['last_update'])) echo $edit['last_update']; ?>"/> </td></tr>
                                            <tr><td> Short Discription </td> <td width="800px"> <textarea name="s_discription" rows="5" cols="73"> <?php if(isset($edit['s_discription'])) echo $edit['s_discription']; ?>  </textarea>   </td></tr>
                                            <tr><td> </td><td width="800px"><textarea name="description" class="ckeditor" id="editor" cols="70" rows="20"><?php if(isset($edit['description'])) echo $edit['description'];?></textarea>	
											</td> </tr>
											
                                            <tr><td> Picture </td> <td> <input type="file" name="picture" value="<?php if(isset($edit['picture'])) echo $edit['picture'];?>"/> </td></tr> 
											<tr><td> </td> <td> <input type="submit" name="submit" value="Submit"/> </td></tr>
                                       
                                       
                                        <?php 
                                               if(isset($edit['id'])){
                                                 echo '<input type="hidden" name="id" value="'.$edit['id'].'" />';   
                                               }             
                                         ?>  
                                       
                                        </form>    
                                     </table>
                              
                                </div>
						  </div>  
					 </div>
				
				
				
                 <!-- Write End  -->
                <?php
				
				if(isset($_GET['p_c'])){
					
					$p_c=$_GET['p_c'];
					
					
					echo $p_c;
				 
           $i=0;
           $all_news = mysqli_query($con,"SELECT * FROM `product` WHERE categories = '$p_c' ORDER BY id DESC ");
           
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
                               	   	

										  </a>&nbsp; <a href="index.php?action=delete&id='.$row['id'].'"onclick="return confirm('."'Are you sure you want to delete this?'".');"><img src="../picture/delete.png" width="14" height="14" alt="Delete"  />
										  </a>&nbsp; <a href="index.php?action=edit&id='.$row['id'].'"><img src="../picture/edit.png" width="12" height="14" alt="Edit"  /> 							 
							

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
				 
                <!-- body Right End  -->
                
			</div> 
		</section>  
   </div> 
   
</div>      
<!-- body end -->

<!--head start-->
    <?php include('a_footer.php')?>
<!--head start-->

    