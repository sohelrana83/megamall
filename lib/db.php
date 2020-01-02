<?php

    session_start();
    
    /*  
    $servername = "localhost";
    $username = "mizanitc_24";
    $password = "8M{O9!2w{r(&";
    $dbname = "mizanitc_megamall24";
 
   */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "megamall_24";
   
    
    $con=mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$con){
        die(" error conn ?".mysqli_error());
    } 
    
    define("BAGE_PATH",str_replace('libery\db.php','',__FILE__));
 
    function post_data($table_name,$primy_key){
       global $con; 
       $result = mysqli_query($con,'DESCRIBE '.$table_name);
       $i_q='';
       while($row = $result->fetch_assoc()) 
       {          
                    
          if(isset($_POST[$row['Field']])) { 
            $postdata= str_replace("'","''",$_POST[$row['Field']]);
            $i_q .="`".$row['Field']."`='".$postdata."' , ";            
          }
        
       }
       $i_q = rtrim($i_q,' , ');
       
       if(isset($_POST[$primy_key]) && $_POST[$primy_key]!='') {  
         $sql = "UPDATE ".$table_name." SET ".$i_q." WHERE `".$primy_key."`='".$_POST[$primy_key]."'";
       } else {
         $sql = "INSERT INTO ".$table_name." SET ".$i_q;
       }
 
       $result = mysqli_query($con,$sql);     
       return mysqli_insert_id($con);       
    }      
    
     
?>
