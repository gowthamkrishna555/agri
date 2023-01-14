<?php
    $sql = "select * from Voter";
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) 
      {
        $vid = $row['VID'];
        $name = $row['VNAME'];
        $age = $row['AGE'];
        $gender = $row['GENDER'];
        $address = $row['ADDRESS'];
        echo ' <tr>
      <th scope="row">' . $vid . '</th>
      <td>' . $name . '</td>
      <td>' . $age . '</td>
      <td>' . $gender . '</td>
      <td>' . $address . '</td>
      <td>
      <button class="btn btn-primary"><a href="update.php ? updateid='.$vid.'"class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteid='.$vid.'"class="text-light">Delete</a></button>
      </td></tr>';
      }
    }
    ?>
   
