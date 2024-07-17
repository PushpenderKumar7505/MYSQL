<?php
$servername= "localhost";
$username= "root";
$password="";
$dbname = "happy";
$conn = mysqli_connect($servername,$username,$password, $dbname);
if(!$conn){
    die("connnection was not successfull:".mysqli_connect_error());
}
else{
    echo "connection was successfull <br>";
}
$sql = "DELETE FROM `student` WHERE std_name='Pushpendra'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of rows are affected: $aff <br>";


?>