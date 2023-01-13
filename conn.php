<?php
 include('customer.php');
 $C_ID=$_POST['fid'];
 $C_NAME=$_POST['fname'];
 $C_ADDRESS=$_POST['faddress'];
 $C_CONTACT=$_POST['fcontact'];
 $C_AGE=$_POST['fage'];
 mysqli_query($conn,INSERT INTO `consumer` (`C_ID`, `C_NAME`, `C_ADDRESS`, `C_CONTACT`, `C_AGE`) VALUES ('$C_ID', '$C_NAME', ' $C_ADDRESS', '$C_CONTACT', ' $C_AGE'));
 header('location:customern.php');
 ?>
