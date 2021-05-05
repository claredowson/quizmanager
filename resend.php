<?php include_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
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
            <h1 class="title__item">Quizzes are Us</h1>
            <div>
                <p>Your score has been recorded</p>
                <a href="resplay.php">Play again</a>
                <a href="resview.php">Select another quiz</a>
                <a href="index.php">Go back to login page</a>
            </div>
        </div>
    </div>
</body>
</html>