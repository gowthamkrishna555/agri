<?php
  $cid=$_POST['C_ID'];
  $cname=$_POST['C_NAME'];
  $caddress=$_POST['C_ADDRESS'];
  $ccontact=$_POST['C_CONTACT'];
  $cage=$_POST['C_AGE'];

  $conn=new mysqli('localhost','root','','farmer')
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt=$conn->prepare("insert into consumer(C_ID,C_NAME,C_ADDRESS,C_CONTACT,C_AGE)values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$C_ID,$C_NAME,$C_ADDRESS,$C_CONTACT,$C_AGE);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }


  ?>