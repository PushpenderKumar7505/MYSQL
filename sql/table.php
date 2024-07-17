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
    echo "connection was successfull";
}
$sql = "INSERT INTO `student` (`std_name`, `std_class`, `std_roll`) VALUES ('Pushpendra', 'Btech', 'B1001')";
$result = mysqli_query($conn, $sql);
if ($result){
    echo "data insert sucessfully ";
}
else{
    echo "Error Received".mysqli_error($conn);
}
mysqli_close($conn);    
?>