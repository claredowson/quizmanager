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
            echo "<thead>";
            echo "<tr>";
            echo "<th>Question</th>";
            echo "<th colspan='4' class='sizing'>Multiple Choice Answers</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            while($row=pg_fetch_assoc($result)){echo "<tr>";
            echo "<td align='left' width='100'  class='question'>" . $row['question'] . "</td>";
            echo "<th scope='col' class='choice__prefix'>A</th>";
            echo "<td align='left' class='choice__text' width='100'>" . $row['choice_1'] . "</td>";
            echo "<th scope='col' class='choice__prefix'>B</th>";
         
            if($row['answer']=='Choice 2') 
            {
            echo "<td align='left' class='choice__text' width='100' style='background-color: blue;'>".$row['choice_2']."</td>";
                }
                else
                {
                echo "<td align='left' class='choice__text' width='100';'>".$row['choice_2']."</td>";
            }
     
           
            echo "<th scope='col' class='choice__prefix'>C</th>";
            echo "<td align='left' class='choice__text' width='100'>" . $row['choice_3'] . "</td>";
            echo "<th scope='col' class='choice__prefix'>D</th>";
            echo "<td align='left' class='choice__text' width='100'>" . $row['choice_4'] . "</td>";
            
         
            
            echo "</tr>"; 
            echo "</tbody>";
            }echo "</table>";?>
                <div>
                    <a href="viewselection.php">View another Quiz</a>
                    <a href="index.php">Back to login page</a>
                </div>
        </div>
    </div>
</body>
</html>