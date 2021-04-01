<?php include_once 'db.php'; 

$fieldErrors = array();
    if(isset($_POST['Done']))
    {
        $fields = array('question', 'choice_1', 'choice_2', 'choice_3', 'choice_4', 'answer');
        foreach ($fields as $field) 
        {
            if ($_POST[$field] == "")  
            {
                $fieldErrors[] = $field;
            } 
        }
    }

    if($fieldErrors == "")
    print_r($fieldErrors);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="app.css">
</head>
<header>
    <figure class="logo">
        <img src="images/barnardos.png" alt="Barnardos Logo" />
    </figure>
</header>
<body>
<div class="container">
        <div id="home" class="flex__center flex__column">
            <h2>Enter a new question into the Nature Quiz</h2>
            <ul>
                <form name="insert" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <li>Question:</li><li><input type="text" id="file" name="question"/> 
                    <span id="error_name" style="color:red;">
                    <?php echo ($fieldErrors && in_array("question", $fieldErrors)) ? 'Please enter a question' : ''; ?></span>  
                    </li>
                    <li>Choice 1:</li><li><input type="text" id="file"  name="choice_1" />
                    <span id="error_name" style="color:red;">
                    <?php echo (count($fieldErrors) > 0 && in_array("choice_1", $fieldErrors)) ? 'Please enter a choice' : ''; ?></span> 
                    </li>
                    <li>Choice 2:</li><li><input type="text" id="file" name="choice_2" />
                    <span id="error_name" style="color:red;">
                    <?php echo (count($fieldErrors) > 0 && in_array("choice_1", $fieldErrors)) ? 'Please enter a choice' : ''; ?></span>
                    </li>
                    <li>Choice 3:</li><li><input type="text" id="file"  name="choice_3" />
                    <span id="error_name" style="color:red;">
                    <?php echo (count($fieldErrors) > 0 && in_array("choice_1", $fieldErrors)) ? 'Please enter a choice' : ''; ?></span>
                    </li>
                    <li>Choice 4:</li><li><input type="text" id="file"  name="choice_4" />
                    <span id="error_name" style="color:red;">
                    <?php echo (count($fieldErrors) > 0 && in_array("choice_1", $fieldErrors)) ? 'Please enter a choice' : ''; ?></span>
                    </li>
                    <li>Answer:</li>
                    <li>  
                    <select id="file" name="answer" class="answer">
                    <option >Choice 1</option>
                    <option >Choice 2</option>
                    <option >Choice 3</option>
                    <option >Choice 4</option>
                    </select></li>
                    <li><input type="submit" class="button" name="submit" value="Submit" name='Done'/></li>
                </form>
            </ul> 
        </div>
    </div>
</body>
</html>
<?php  

$query = "INSERT INTO quiz (question, choice_1, choice_2, choice_3, choice_4, answer) VALUES ('$_POST[question]','$_POST[choice_1]','$_POST[choice_2]','$_POST[choice_3]','$_POST[choice_4]','$_POST[anwser]')"; 
$result = pg_query($query);  

?> 