<?php
    $username= $_POST['IDnumber'];
    $password= $_POST['password'];

    if (!empty($username) || !empty($password)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbname = "Orders";

        $conn = mysqli_connect($host, $dbUsername);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    } else {
        echo "ID and Password is emtpy";
    }

    mysql_close($conn);
?>