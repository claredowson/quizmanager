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
            $result = pg_query($db,"SELECT id, question FROM quiz"); 
            echo "<table>";
            echo "<tr>";
            while($row=pg_fetch_assoc($result)){ echo "<tr>";
               echo "<th>" . $row['question'] . "</th>";
               echo "<td>" . " <input type='submit' class='button' name='Delete' value='Delete'  /></td>";
               echo "</tr>";
            }echo"</table>"; ?>
            
        
     
            <form name="delete" method="POST" action="">
       
                <?php
                $id = $_POST['id'];
                $query = "DELETE FROM quiz WHERE id='$id'";
                pg_query($query);
                ?>
            </form>


            <div>
                <a href="admindelete.php">Delete a question from another Quiz</a>
                <a href="adminlogin.php">Back to login page</a>
            </div>
        </div>
    </div>
</body>
</html>

