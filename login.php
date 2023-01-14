<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<!-- <form action="login.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username">
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  <br><br>
  <input type="submit" value="Login">
</form>  -->
<div class="container">
        <h1>customer Login</h1>
        <form action="" method="post">
            <p>userid</p>
            <input type="text" id="username" name="cid" placeholder="enter the username">
            <p>password</p>
            <input type="password" name="password" id="password" placeholder="Enter the password">

            <input type="submit" value="login">
            <a href="index.php">Forgot password?</a>
            <a href="register.php">create new account?</a>
        </form>

        
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="consumer";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['password'])){
// Get data from form
$cid = $_POST["cid"];
$password = $_POST["password"];

// Check if username and password match a record in the database
$sql = "SELECT * FROM consumer WHERE C_ID='$cid' AND C_PASSWORD='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    session_start();
    $_SESSION["logged_in"] = true;
    $_SESSION["cid"] = $cid;
    header("Location: conn.php");
} else {
    // Login failed
    echo
             "
             <script>
               alert('Invalid Username or Password');
             </script>
             ";
}


$conn->close();
}
?>
</body>
</html>