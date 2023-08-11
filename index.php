<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        // echo "Connection Failed" . mysqli_connect_error();
    } else {
        // echo "Connection Successful";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];


    $sql = "INSERT INTO `user_details`.`users` ( `Name`, `Email`) VALUES ( '$name', '$email')";

    if ($con->query($sql) == true) {
        echo "Successfully Inserted";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .container {
            text-align: center;
            margin-top: 200px;
            font-size: 30px;
        }

        input {
            width: 800px;
            height: 35px;
        }
    </style>
    <title>Coming Soon.</title>
</head>

<body>
    <div class="container">
        <h1>Coming Soon</h1>
        <br />
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" /><br /><br />
            <input type="email" name="email" id="email" placeholder="Enter Your Email" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>

</html>