<?php include_once 'db.php';
ob_start(); 
  session_start();

$db = pg_connect("host=localhost port=5432 dbname=claretest");
 
$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);

$query="SELECT * FROM users WHERE username='$username' and password='$hashed_password'";
$result =pg_query($query);

$count=pg_num_rows($result);

if($count==1){
    
    $_SESSION['Username']=$username;
    while ($result_ar = pg_fetch_assoc($result)) {
        $_SESSION["role"]=$result_ar['role'];
        }
            header("location:login_success.php");
        }
        else {
            echo "Wrong Username or password";
        }


?>