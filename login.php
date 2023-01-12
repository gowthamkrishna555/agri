<?php

  $name=$_POST['name'];
  $password=$_POST['password'];
 

  $conn=new mysqli('localhost','root','','farmer')
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt=$conn->prepare("insert into registration(username,password)values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }


  ?>