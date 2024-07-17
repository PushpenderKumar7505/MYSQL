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
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);

// it will give the no of rows in a table  
$nums=mysqli_num_rows($result);
echo $nums;
echo "<br>";
while($rows = mysqli_fetch_assoc($result)){
    echo var_dump($rows);
}
 
?>