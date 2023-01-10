<<?php 
include "../dbconnection.php";

$userName = $_POST['name'];
$userPassword = $_POST['password'];
$userMail = $_POST['email'];
$userMobile = $_POST['mobile'];
$added_on=date('Y-m-d h:i:s');

$query = "INSERT INTO `users` (`name`, `mail`,`mobile`,`password`,`added_on`) VALUES ('$userName','$userMail','$userMobile','$userPassword','$added_on')";

$resultOfQuery = mysqli_query($con, $query);

$arr[];

if($resultOfQuery){
    json_encode($arr["success"] => true);
}
else {
    json_encode($arr["success"] => false);
}
print($arr);

 ?>