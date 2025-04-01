<?php
$server_name = 'sql101.infinityfree.com';
$user_name = 'if0_38648500';
$password = 'dsrfew45454';
$db_name = "if0_38648500_client_message";
// $server_name = 'localhost';
// $user_name = 'root';
// $password = '';
// $db_name = "client_message";
$con = @mysqli_connect($server_name, $user_name, $password, $db_name);

if ($con) {
    print_r($_POST);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $mob = $_POST['pNumber'];
        $message = $_POST['Message'];

        $sql = "insert into message(name,email,mob,message) values ('$name','$email','$mob','$message')";

        $query = mysqli_query($con, $sql);
        if ($query) {
            header("location: ../index.html");
        } else {
            echo mysqli_error($con);
        }
    } else {
        echo "error while sendind data to database";
    }
} else {
    echo "error due to :" . mysqli_connect_error();
}
