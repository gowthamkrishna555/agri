<?php
 include('customer.php');
if(isset($_POST['submit'])){
   $CID=$_POST['cid'];
    $CNAME=$_POST['cname'];
    $CADDRESS=$_POST['caddress'];
    $CCONTACT=$_POST['ccontact'];
    $CAGE=$_POST['cage'];
   $sql="INSERT INTO `consumer` (C_ID, C_NAME, C_ADDRESS, C_CONTACT, C_AGE) VALUES ('$CID', '$CNAME', '$CADDRESS', '$CCONTACT', '$CAGE');";
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
        <link rel="stylesheet" href="customer.css">
    </head>
    <body>
        <div class="fa">
            <form method="POST" action="conn.php" >
           

                <label for="cid" >ID</label>
                <input type="text" id="cid" name="cid">
                <label for="cname">Name</label>
                <input type="text" id="cname" name="cname">
                <label for="caddress">Address</label>
                <input type="text" id="caddress" name="caddress">
                <label for="ccontact">Contact</label>
                <input type="number" id="ccontact" name="ccontact">
                <label for="cage">Age</label>
                <input type="number" id="cage" name="cage">
                <input type="submit" name="submit"value="add">
                </form>
        </div>
        <div class="table">
        <table>
         
       
      <?php
         include('customer.php');
         $query=mysqli_query($conn,"SELECT * FROM `consumer` WHERE C_ID=''");
         while($row=mysqli_fetch_array($query)){

            ?>
              
            <caption style="color:red;">DETAILS</caption>
            <tr>
                
                <th>ID</th>
                <td><?php echo $row['C_ID'];?></td></tr>
                <th>Name</th>
                <td><?php echo $row['C_NAME'];?></td></tr>
                <tr>
                <th>Address</th>
                <td><?php echo $row['C_ADDRESS'];?></td></tr>
                <tr>
                <th>Contact</th>
                <td><?php echo $row['C_CONTACT'];?></td></tr>
                <tr>
                <th>Age</th>
                <td><?php echo $row['C_AGE'];?></td></tr>
                </table></div></form>
                
                <?php

          }
    
          ?>
       
        <button class="bt">UPDATE</button>
        <button class="bt">DELETE</button>
        <a href="buy.php" target="_self">
        
        <button class="buy">BUY</button></a>
    
        
    
        
    </body>
</html>