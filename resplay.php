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
    
    $_SESSION['clicks'] = 0;
												
	if (isset($_POST['click']) || isset($_GET['start'])) {
		$_SESSION['clicks'] += 1 ;
        
    }
												
?>

<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" ><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">  				
<table><?php 
$db = pg_connect("host=localhost port=5432 dbname=claretest");
$result = pg_query($db,"SELECT * FROM quiz");
$row=pg_fetch_assoc($result);
		  ?>
       
</h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>

    <tr><td><h3><br><?php echo @$row['question'];?>     
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_1'];?>">&nbsp;<?php echo $row['choice_1'];?><br>
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_2'];?>">&nbsp;<?php echo $row['choice_2'];?><br>
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_3'];?>">&nbsp;<?php echo $row['choice_3'];?><br>
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_4'];?>">&nbsp;<?php echo $row['choice_4'];?><br>
            <tr><td><button class="button" name="click">Next</button></td></tr> <?php } ?>
       
     
       <form>
       <?php if($_SESSION['clicks']>5){ 
       
    } 
    ?>
       
       
            
            <div>
                <a href="resend.php">Temp Link</a>
            </div>
        </div>
    </div>
</body>
</html>