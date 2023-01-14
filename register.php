<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <?php

    include('register.php');
    if (isset($_REQUEST['Password'])) {
        $sql = "SELECT C_ID FROM consumer where C_ID='" . $_REQUEST['username'] . "'";
        $res = $conn->query($sql);

        if ($res->num_rows == 1) {
            echo "email already existed";
        } else {

            if ($_REQUEST['cid'] != "" || $_REQUEST['password'] != "") {
                $cid = $_REQUEST['cid'];
                $cpassword = $_REQUEST['password'];
                $cname = $_REQUEST['name'];
                $caddress = $_REQUEST['address'];
                $cnumber = $_REQUEST['number'];
                $ccontact = $_REQUEST['contact'];
                $sql = "INSERT INTO `consumer` (`C_ID`, `C_PASSWORD`, `C_NAME`,'C_ADDRESS','C_CONTACT','C_AGE') VALUES  ('$cid','$cpassword','$cname','$caddress','$cnumber','$contact')";
                $conn->query($sql);
            } else {
                echo "fill";
            }
        }
    }
    ?>
    <div class="container">
        <h1>Create account</h1>
        <form action="" method="post">
            <p>userid</p>
            <input type="text" name="cid" id="id" placeholder="enter your id">
            <p>password</p>
            <input class="text-box" type="password" name="password" id="name" placeholder="Enter your password">
            <p>name</p>
            <input type="text" name="name" id="name" placeholder="Enter the name">
            <p>address</p>
            <input type="text" name="address" id="name" placeholder="Enter the address">
            <p>contact</p>
            <input type="number" name="number" id="name" placeholder="Enter the contact">
             <p>contact</p>
            <input type="number" name="contact" id="name" placeholder="Enter the contact">
            <p>age</p>
            <input type="number" name="age" id="name" placeholder="Enter the age">
            <input type="submit" name="button" value="Create account">

        </form>
        <a href="login.php">back</a>


    </div>

</body>

</html>