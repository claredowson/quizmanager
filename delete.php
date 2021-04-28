<?php


include_once 'db.php'; 
$db = pg_connect("host=localhost port=5432 dbname=claretest");
if (!$db) {
    die("Connection failed: " . pg_connect_error());
}

$id = $POST['id'];
$query = "DELETE FROM quiz WHERE id='$id'";
pg_query($query);
    

if (pg_query($db, $query)) {
    pg_close($db);
    header('Location: admindeleting.php'); 
    exit;
} else {
    echo "Error deleting record";
} ?>
