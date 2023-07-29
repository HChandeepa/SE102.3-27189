<?php
$conn = mysqli_connect("localhost", "root", "", "university");

if (!$conn) {
    die("error");
}

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sql = "INSERT INTO students(id,name,email,password)";

if ($conn->query[$sql] == TRUE) {
    echo "data added" . $id;
} else {
    echo "error";
}
?>