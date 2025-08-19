<?php
$conn = mysqli_connect("localhost", "root", "", "psits");

if(!$conn) {
    die("Connection Failed.");
}

$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE mobile='$mobile' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location: page");
    exit();

} else {
    echo "Login Failed!";
}
mysqli_close($conn);
?>