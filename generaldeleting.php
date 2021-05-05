<?php include_once 'db.php'; ?>
<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM general WHERE id='$id'";
    pg_query($query);
}
?>
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
            <h1 class="title__item">General Knowledge Quiz</h1>
            
          
            <?php 
            $db = pg_connect("host=localhost port=5432 dbname=claretest");
            $result = pg_query($db,"SELECT * FROM general"); 
            echo "<table>";
            echo "<tr>";
            while($row=pg_fetch_assoc($result)){ ?>
            
            <tr>
                <th> <?php echo $row['question'] ?> </th>
                <td>
                   <form method="post" action=" <?php htmlspecialchars(   $_SERVER["PHP_SELF"]) ?> ">
                        <input type='hidden' name='id' value='<?php echo $row["id"] ?>'>
                        <button type='submit' class='button' name='delete'>Delete</button>
                    </form>
                </td> 
            </tr>
            <?php } ?>
            </table> 
         
            <div>
                <a href="admindelete.php">Delete a question from another Quiz</a>
                <a href="adminlogin.php">Back to login page</a>
            </div>
        </div>
    </div>
</body>
</html>

