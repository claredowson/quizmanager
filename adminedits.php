<?php include_once 'db.php'; 
$db = pg_connect("host=localhost port=5432 dbname=claretest");
$result = pg_query($db,"SELECT * FROM quiz");
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
<table>

	  <tr>
	    <td>Question</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = pg_fetch_array($result)) {
			?>
	  <tr>
		<td><?php echo $row["question"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
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
        
   
</body>
</html>