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
            <h1 class="title__item">What Quiz do you want to edit questions?</h1>
            <div>
                <a href="generaledits.php">General Knowledge</a>
                <a href="adminedits.php">Natural World</a>
                <a href="historyedits.php">History</a>
                <a href="adminlogin.php">Back to login page</a>
            </div>
        </div>
    </div>
</body>
</html>