<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "bankaccounts";

$connection = mysqli_connect($servername, $username, $password, $dbName);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}
?>


<?php
 if(isset($_GET["UserBalance"])){
    $sql->connect("Select * from ppl where PersonName=?");
    $sql->bind_param("s", $_GET["User"]);
    $sql->execute();
    $sqlResult = $sql->get_result();


 } 
?>