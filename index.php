<?php include_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
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
            <h1 class="title__item">Welcome to Quizzes R us</h1>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required> 
            </div>
           
                <button type="button" class="button">Submit (Not Working)</button>
           
            <a href="adminlogin.html">Admin (Temp button)</a>
            <a href="viewview.html">View (Temp Button)</a>
            <a href="resview.html">Restricted (Temp Button)</a>
        </div>
    </div>
</body>
</html>