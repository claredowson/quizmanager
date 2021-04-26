<?php include_once 'db.php';
session_start();
if(isset($_SESSION['username']))
$_SESSION["role"]=$result_ar['role'];

        switch ($_SESSION['role']) {
            case "Admin":
                header("location:adminlogin.php");
                break;
            case "View":
                header("location:viewview.php");
                break;
            case "Restricted":
                header("location:resview.php");
                break;
            default:
              echo "Wrong user";
              header("location:index.php");
            
        }

?>
