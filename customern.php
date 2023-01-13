<html>
    <head>
        <link rel="stylesheet" href="customer.css">
    </head>
    <body>
        <div class="fa">
            <form method="POST" action="/action_page.php >
                <label for="cid">ID</label>
                <input type="text" id="fid" name="fid">
                <label for="cname">Name</label>
                <input type="text" id="fname" name="fname">
                <label for="caddress">Address</label>
                <input type="text" id="faddress" name="faddress">
                <label for="ccontact">Contact</label>
                <input type="number" id="fcontact" name="fcontact">
                <label for="cage">Age</label>
                <input type="number" id="fage" name="fage">
                <button class="ds">Add</button>
                </form>
        </div>
        <div class="table">
        <table>
         
       
      <?php
         include('customer.php');
         $query=mysqli_query($conn,"SELECT * FROM `consumer`");
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
        <a href="buy.html" target="_self">
        <button class="buy">BUY</button></a>
        
    

    </body>
</html>