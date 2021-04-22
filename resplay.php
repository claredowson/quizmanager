<?php include_once 'db.php'; 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="resplay.css">
</head>
<header>
    <figure class="logo">
        <img src="images/barnardos.png" alt="Barnardos Logo" />
    </figure>
</header>
<body>
    <div class="container">
        <div id="home" class="flex__center flex__column">
            <h1 class="title__item">Nature Quiz</h1>
       
<?php 
$db = pg_connect("host=localhost port=5432 dbname=claretest");
$result=pg_query($db,"SELECT * FROM quiz ORDER BY random()
LIMIT 5;");

?>
    
<?php  										
	if (isset($_POST['click']) || isset($_GET['start'])) {
	$_SESSION['clicks'] += 1 ; 
	}			
    									
?>
<div><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" ><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">  				
<table>
 				
    <tr><td><?php echo @$row['question'];?></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ 
        $row = pg_fetch_assoc($result);?>
       

    <tr><td><h3><?php echo $row['question'];?><br>

    <tr><td><input required type="radio" name="userans" class="choices" value="<?php echo $row['choice_1'];?>">&nbsp;<?php echo $row['choice_1'];?><br>

    <tr><td><input required type="radio" name="userans" class="choices" value="<?php echo $row['choice_2'];?>">&nbsp;<?php echo $row['choice_2'];?><br>

    <tr><td><input required type="radio" name="userans" class="choices" value="<?php echo $row['choice_3'];?>">&nbsp;<?php echo $row['choice_3'];?><br>

    <tr><td><input required type="radio" name="userans" class="choices" value="<?php echo $row['choice_4'];?>">&nbsp;<?php echo $row['choice_4'];?><br>

    <tr><td><button class="button" name="click">Next</button></td></tr> <?php } ?>
      
     
    <form>
    <?php if($_SESSION['clicks']>5){ 
        $_SESSION['clicks'] = 0;
        echo "<script> location.href='resend.php'; </script>";
        exit;
        } 
    ?>
   
        </div>
    </div>
</body>
</html>