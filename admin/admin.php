<?php 
    include('../lib/db.php');
    
    
 if(isset($_POST['login'])){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
  
    $result = mysqli_query($con,"SELECT * FROM admin WHERE `login_name`='$user_name' AND `password`='$password' AND `status`='1' ");           
    $row = $result->fetch_assoc();

      
    if(isset($row['login_name'])){
     $_SESSION['login_name']=$row['login_name']; 
     $_SESSION['id']=$row['id'];  
     $_SESSION['login']=Ture; 
     header('location:index.php');
       
    } else $error= " Inviled Login Your User Name and Password";
    
 }
  
 if(isset($_GET['logout']) && $_GET['logout']=='yes'){
    unset($_SESSION['login_name']);
    unset($_SESSION['id']);
    unset($_SESSION['login']);
    session_destroy();
 }   
    
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::megamall24 Admin Panel ::</title>
<link href="css/style3.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <div id="header">
      
        <h1 style="color:#FF0080; text-align: center;">Admin Panal<br /> Megamall24.com </h1>
        
        </div>
            <div id="body">
			

                
				<div class="login_from" style="margin-left:15%;">	
				<div class="logo2">   </div>
				<div class="admin_login">
                <h2 class="suc_mass"><?php if(isset($success)) echo $success; if(isset($error)) echo $error; ?></h2>
				<b>Input your Name and Password</b>
                <form method="post" action="admin.php">
                <table >
                
                <p align="center"></p>
                 <tr>
                 <td>
                    User Name :
                 </td>
                 <td>
                    <input type="text" name="username" value="" size="50" />
                 </td>
                 </tr>
                 <tr>
                 <td> Password : </td> 
                 <td>
                    <input type="password" name="password" value="" size="50" />
                 </td>                
                 </tr>
                </table>
                <input class="bottn" type="submit" name="login" value="Login" />
                 
                </div>
				</div>
            </div>
            
            <div id="footer">
           
				<h3> Design By Mizan IT Ltd</h3>
            
            </div>
    
 </div>
</body>
</html>
