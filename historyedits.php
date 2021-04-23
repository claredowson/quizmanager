<?php include_once 'db.php'; 
$result = pg_query($dbconn,"SELECT * FROM history");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Questions</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="resplay.css">
</head>
<header>
    <figure class="logo">
        <img src="images/barnardos.png" alt="Barnardos Logo" />
    </figure>
</header>
<body>
<?php
if (pg_num_rows($result) > 0) {
?>
<div class="container">
    <div id="home" class="flex__center flex__column">
        <h1 class="title__item">History Quiz</h1>
        
        <table>
            <?php
    
			$i=0;
			while($row = pg_fetch_array($result)) {
			?>
            
	        <tr><td> 
            <?php echo $row["question"]; ?></td>
		        <td><a href="hisupdate-process.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            </tr>
           
            <?php
			$i++;
			}
			?>
           
        </table>
        
<?php
}
else
{
    echo "No result found";
}
?>

            <div>
                <a href="adminedit.php">Edit another Quiz</a>
                <a href="adminlogin.php">Back to login page</a>
            </div>
    </div>
</div>     
 
</body>
</html>