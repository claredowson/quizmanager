<?php

$dbconn = pg_connect("host=localhost port=5432 dbname=claretest");
$result = pg_query($dbconn, "select * from quiz");
var_dump(pg_fetch_all($result));

?>