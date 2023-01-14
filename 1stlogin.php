<?php
 include('customer.php');
if(isset($_POST['submit'])){
   $userid=$_POST['Userid'];
    $passwordE=$_POST['password'];
   $sql="SELECT * FROM `consumer` WHERE C_ID='$userid';";
   $result=mysqli_query($conn,$sql);

if($result)
{
 header('location:conn.php');
}
else{
  echo 'error';
}
}
?>
<html>
  <head>
<form action="action_page.php" method="post">
 
    <link rel="stylesheet" href="1stlogin.css">
<div class="container1" >
    
        <label for="uname"><b>Userid</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required></div>
     <div class="abc">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <div>
            <a href="consumer.html" target="_self";
            <button type="submit">Login</button></a>
            
              
          
          </div>
        
      <button type="button" class="cancelbtn">Cancel</button>
    
      <div class="signup_link">
        
            Not a user?<a href="2ndlogin.html">Signup</a>
        
        
      </div>
    </div>
  </form>
</head>
</html>