<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:adminview.php");
}
?>
<html>
    <body>
        Login Successful
    </body>
</html>