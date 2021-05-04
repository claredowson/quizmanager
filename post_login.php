<?php include_once 'db.php';
ob_start(); 
  session_start();

$db = pg_connect("host=localhost port=5432 dbname=claretest");
 
$username = $_POST['username'];
$password = $_POST['password'];

$result = pg_query($db, "SELECT password, role FROM users WHERE username = '".$username."'");

$db_password="";
$db_role="";

$count=pg_num_rows($result);
if($count==1){

    while ($result_row = pg_fetch_assoc($result)) {
        $db_password = $result_row['password'];
        $db_role = $result_row['role'];  
    }

    $success = password_verify($password,$db_password);
    if ($success) {
        $_SESSION['Username']=$username;
        $_SESSION['role']=$db_role;
        header("location:login_success.php"); 
    }
    else {
        echo "Wrong Username or password";
    }
}
else {
    echo "Wrong Username or password";
}

?>