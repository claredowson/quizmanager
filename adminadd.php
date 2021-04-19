<?php include_once 'db.php'; 

$errors = [];
$fields = ['question', 'choice_1', 'choice_2', 'choice_3', 'choice_4', 'answer'];
$optionalFields = ['answer'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }

        if (empty($errors)) {
            $query = "INSERT
            INTO quiz (question, choice_1, choice_2, choice_3, choice_4, answer)
            VALUES ('$_POST[question]','$_POST[choice_1]','$_POST[choice_2]','$_POST[choice_3]','$_POST[choice_4]','$_POST[answer]')";
            $result = pg_query($query);
        }
}
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
                    <li>Question:</li><li><input type="text" id="file" name="question" value="<?php echo htmlspecialchars($values['question']);?>"/> 
                    <?php if (in_array('question', $errors)): ?>
                    <span class="error">Please enter a question</span>
                    <?php endif; ?> 
                    </li>
                    <li>Choice 1:</li><li><input type="text" id="file"  name="choice_1" value="<?php echo htmlspecialchars($values['choice_1']);?>"/>
                    <?php if (in_array('question', $errors)): ?>
                    <span class="error">Please enter a choice</span>
                    <?php endif; ?> 
                    </li>
                    <li>Choice 2:</li><li><input type="text" id="file" name="choice_2" value="<?php echo htmlspecialchars($values['choice_2']);?>"/>
                    <?php if (in_array('question', $errors)): ?>
                    <span class="error">Please enter a choice</span>
                    <?php endif; ?> 
                    </li>
                    <li>Choice 3:</li><li><input type="text" id="file"  name="choice_3" value="<?php echo htmlspecialchars($values['choice_3']);?>" />
                    <?php if (in_array('question', $errors)): ?>
                    <span class="error">Please enter a choice</span>
                    <?php endif; ?> 
                    </li>
                    <li>Choice 4:</li><li><input type="text" id="file"  name="choice_4"  value="<?php echo htmlspecialchars($values['choice_4']);?>"/>
                    <?php if (in_array('question', $errors)): ?>
                    <span class="error">Please enter a choice</span>
                    <?php endif; ?> 
                    </li>
                    <li>Answer:</li>
                    <li>  
               
                    <select id="file" name="answer">
                    <option value="" disabled selected>Choose option</option>
                    <option value="Choice 1" <?php if($answer=="Choice_1") {echo "selected";} ?>>Choice 1</option>
                    <option value="Choice 2" <?php if($answer=="Choice_2") {echo "selected";} ?>>Choice 2</option>
                    <option value="Choice 3" <?php if($answer=="Choice_3") {echo "selected";} ?>>Choice 3</option>
                    <option value="Choice 4" <?php if($answer=="Choice_4") {echo "selected";} ?>>Choice 4</option>
                
                    </select></li>
                    <li><input type="submit" class="button" name="submit" value="Submit" name='Done'/></li>
                </form>
            </ul> 
        </div>
    </div>
</body>
</html>