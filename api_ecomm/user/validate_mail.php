<?php 

include './dbconnection.php';

$userMail = $_POST['email'];
$sqlQuery = "SELECT * FROM users WHERE email='$userMail'";

$resultOfQuery = mysqli_query($con,$sqlQuery);

$arr[];
if(mysqli_num_rows($resultOfQuery) > 0){
    json_encode($arr["emailFound"] => true);
    echo "BAŞARILI";
}
else {
    json_encode($arr["emailFound"] => false);
    echo "BAŞARISIZ";

} 

print_r(json_encode($arr))


?>