<?php
$servername= "localhost";
$username= "root";
$password="";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connnection was not successfull:".mysqli_connect_error());

}
else{
    echo "connection was successfull";

}
$sql = "CREATE DATABASE happy";
$result = mysqli_query($conn, $sql);
if ($result){
    echo "database is created ";
}
else{
    echo "database is not created ".mysqli_error($conn);
}

mysqli_close($conn);    
?>