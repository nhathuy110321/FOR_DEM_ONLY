<?php
session_start();
include "./configdb.php";
$user = $_POST['Email'];
$pass = $_POST['password'];
$sql = "select * from users where email='$user' and password='$pass'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['Email'] = $row['email'];
    if ($row['role'] == 'admin') {
        header("location:");
    } else {
        header("location:home.php");
    }

} else{
    header("location:index.php");
}
