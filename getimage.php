<?php
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game_world";

$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($dbname);
$sql="SELECT picture FROM ps4 WHERE id=$id";
$result = $conn->query($sql);
$row = mssql_fetch_assoc($result);
mysqli_close($link);

header("content-type: image/jpeg");
echo $row['image'];
?>