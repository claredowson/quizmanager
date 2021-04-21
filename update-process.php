<?php include_once 'db.php'; 

if(count($_POST)>0) {
    
    pg_query($dbconn,"UPDATE quiz set id='" . $_POST['id'] . "', question='" . $_POST['question'] . "', choice_1='" . $_POST['choice_1'] . "', choice_2='" . $_POST['choice_2'] . "' ,choice_3='" . $_POST['choice_3'] . "', choice_4='" . $_POST['choice_4'] . "', answer='" . $_POST['answer'] . "' WHERE id='" . $_POST['id'] . "'");
    echo "$post[question]";
$message = "Record Modified Successfully";
}
    
    $result = pg_query($dbconn,"SELECT * FROM quiz WHERE id='" . $_GET['id'] . "'");
    $row= pg_fetch_array($result);
  
    ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Questions</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="resplay.css">
</head>
<header>
    <figure class="logo">
        <img src="images/barnardos.png" alt="Barnardos Logo" />
    </figure>
</header>
<head>
    <title>Update Question Data</title>
</head>
<body>
<div class="container">
        <div id="home" class="flex__center flex__column">
            
         
    <form name="edit" method="POST" action="">
        <div><?php if(isset($message)) { echo $message; } ?>
        </div>
<div>
<a href="adminedits.php">Back to Question List</a>
</div>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<br>
Question: <br>
<input type="text" name="question" id="file" value="<?php echo htmlspecialchars($row['question']);?>"/> 
<br>
Choice 1 :<br>
<input type="text" name="choice_1" id="file" value="<?php echo htmlspecialchars($row['choice_1']);?>"/> 
<br>
Choice 2:<br>
<input type="text" name="choice_2" id="file" value="<?php echo htmlspecialchars($row['choice_2']);?>"/> 
<br>
Choice 3:<br>
<input type="text" name="choice_3" id="file" value="<?php echo htmlspecialchars($row['choice_3']);?>"/> 
<br>
Choice 4:<br>
<input type="text" name="choice_4" id="file" value="<?php echo htmlspecialchars($row['choice_4']);?>"/> 
<br>
Answer:<br>
<input type="text" name="answer" id="file" value="<?php echo htmlspecialchars($row['answer']);?>"/> 
<br>
<input type="submit" name="submit" value="Submit" class="button">
</div>
</div>
</form>
</body>
</html>