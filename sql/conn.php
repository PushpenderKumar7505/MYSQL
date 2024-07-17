<?php
echo "welcome to the php server.<br>";
$servername="localhost";
$username="root";
$password="";
// $password="";
$conn= mysqli_connect($servername,$username, $password);
if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{

    echo "connection was successfull";

}
mysqli_close($conn);

?>
