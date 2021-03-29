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
          
        <h1 class="title__item">What Colour is Kermit?</h1>
            <div>
                <div class="choice__container">
                    <p class="choice__prefix">A</p>
                    <p class="choice__text">Red</p>
                </div>
                <div class="choice__container">
                    <p class="choice__prefix">B</p>
                    <p class="choice__text">Pink</p>
                </div>
                <div class="choice__container">
                    <p class="choice__prefix">C</p>
                    <p class="choice__text">Green</p>
                </div>
                <div class="choice__container">
                    <p class="choice__prefix">D</p>
                    <p class="choice__text">Blue</p>
                </div>
            </div>
            <div>
                <a href="viewselection.html">View another Quiz</a>
                <a href="index.html">Back to login page</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$db = pg_connect("host=localhost port=5432 dbname=claretest");
$result = pg_query($db,"SELECT * FROM quiz");
echo "<table>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='300'>" . $row['question'] . "</td>";
echo "<td align='center' width='200'>" . $row['choice_1'] . "</td>";
echo "<td align='center' width='200'>" . $row['choice_2'] . "</td>";
echo "<td align='center' width='200'>" . $row['choice_3'] . "</td>";
echo "<td align='center' width='200'>" . $row['choice_4'] . "</td>";
echo "</tr>";}echo "</table>";?>
