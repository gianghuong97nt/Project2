<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "codeme.edu.vn";

// Tao ket noi

$conn = new mysqli($servername,$username,$password,$bdname);
// Check connection
if($conn-> connect_error){
    die("Contection Failed: ".$conn->connect_error);
}

$sql = "SELECT * FROM article";
$result = $conn->query($sql);
echo '<pre>';
print_r($result);
echo '</pre>';


if($result->num_rows>0){
    while($row = $result->fetch_row()){
       foreach ($row as $key){
           echo $key;
           echo "<br> -----------";
       }
    }
}else{
    echo " 0 Result";
}

$conn->close();

