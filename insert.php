<?php include_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    Your question is: <?php echo $_POST["question"]; ?><br>
    Choice 1 is: <?php echo $_POST["choice_1"]; ?><br>
    Choice 2 is: <?php echo $_POST["choice_2"]; ?><br>
    Choice 3 is: <?php echo $_POST["choice_3"]; ?><br>
    Choice 4 is: <?php echo $_POST["choice_4"]; ?><br>
    Answer is: <?php echo $_POST["answer"]; ?>  
</body>
</html>
<?php
$query = "INSERT INTO quiz (question, choice_1, choice_2, choice_3, choice_4, answer) VALUES ('$_POST[question]','$_POST[choice_1]','$_POST[choice_2]','$_POST[choice_3]','$_POST[choice_4]','$_POST[anwser]')";
$result = pg_query($query); 
?>

