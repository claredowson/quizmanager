<?php include_once 'db.php'; ?>
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
           $result = pg_query($db,"SELECT * FROM quiz"); 
            echo "<table>";
            
            echo "<tr>";
            while($row=pg_fetch_assoc($result)) {echo "<tr>";
            echo "<td class='question'>" . $row['question'] . "</td>";
            echo "</tr>";?>

            
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_1'];?>">&nbsp;<?php echo $row['choice_1'];?><br>
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_2'];?>">&nbsp;<?php echo $row['choice_2'];?><br>
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_3'];?>">&nbsp;<?php echo $row['choice_3'];?><br>
            <tr><td><input required type="radio" class="choices" value="<?php echo $row['choice_4'];?>">&nbsp;<?php echo $row['choice_4'];?><br>
            <tr><td><button class="button" name="click" >Next</button></td></tr> <?php } 
       
     
           
            
            echo "</table>";?>
            <h1 class="title__item">Earth is located in which galaxy?</h1>
            <div>
                <div class="choice__container">
                    <p class="choice__prefix">A</p>

                    <p class="choice__text">The Milky Way Galaxy</p>
                </div>
                <div class="choice__container">
                    <p class="choice__prefix">B</p>
                    <p class="choice__text">The Mars Galaxy</p>
                </div>
                <div class="choice__container">
                    <p class="choice__prefix">C</p>
                    <p class="choice__text">The Galaxy Note</p>
                </div>
                <div class="choice__container">
                    <p class="choice__prefix">D</p>
                    <p class="choice__text">The Black Hole</p>
                    
                </div>
                <a href="resend.php">Temp Link</a>
            </div>
        </div>
    </div>
</body>
</html>