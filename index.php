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
            <form action="post_login.php" method="post">
           
                <p>Username: <input name="username" type="text" id="username"></p>
           
                <p>Password : <input type="password" name="password"
                type="text" id="password"></p>
      
                <p><input type="submit" name="Submit" value="Login (Not Working)"></p>
            </form>
           
            <a href="adminlogin.php">Admin (Temp button)</a>
            <a href="viewview.php">View (Temp Button)</a>
            <a href="resview.php">Restricted (Temp Button)</a>
        </div>
    </div>
</body>
</html>