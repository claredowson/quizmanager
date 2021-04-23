<?php include_once 'db.php'; 

$db = pg_connect("host=localhost port=5432 dbname=claretest");

$username=$POST['username'];
$verysecret=$POST['verysecret'];

$username = stripslashes($username);
$verysecret = stripslashes($verysecret);
$username = pg_escape_string($username);
$verysecret = pg_escape_string($verysecret);

$query="SELECT * FROM users WHERE username='$username' and password='$verysecret'";
$result =pg_query($query);

$count=pg_num_rows($result);

if($count==1){
    session_start();
    $_SESSION['username']=$username;
    while ($result_ar = pg_fetch_assoc($result)) {
        $_SESSION["role"]= $result_ar['role'];
    }
    header("location:login_success.php");
    }
    else {
        echo "Wrong Username or password";
    }

?>