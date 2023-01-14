<?php
 include('customer.php');
if(isset($_POST['submit'])){
   $CID=$_POST['Userid'];
    $CPASSWORD=$_POST['password'];
    $CNAME=$_POST['Name'];
    $CADDRESS=$_POST['Address'];
    $CCONTACT=$_POST['Contact'];
    $CAGE=$_POST['age'];
   $sql="INSERT INTO `consumer` (C_ID,C_PASSWORD, C_NAME, C_ADDRESS, C_CONTACT, C_AGE) VALUES ('$CID','$CPASSWORD' '$CNAME', '$CADDRESS', '$CCONTACT', '$CAGE');";
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
    
    <link rel="stylesheet" href="2ndlogin.css">
    </head>
    <body>
    <div class="conn" >
    <form action="action_page.php" method="post">
        <label for="uname"><b>Userid</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required><br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required><br>
        <label for="nam"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="nam" required><br>
        <label for="add"><b>Address</b></label>
        <input type="text" placeholder="Enter Addresss" name="add" required><br>
        <label for="con"><b>Contact</b></label>
        <input type="number" placeholder="Enter Contact" name="con" required><br>
        <label for="age"><b>Age</b></label>
        <input type="number" placeholder="Enter Age" name="age" required><br>
        <a href="1stlogin.php" target="_self">
        <input type="submit" name="submit" value="Register"><br></a>
      </div>
    </div>
  </form>
  </body>
</html>