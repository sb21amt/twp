<?php
$db = pg_connect("host=localhost port=5432 dbname=postgres user=Shapla password=twp_db_user");
$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
'$_POST[price]','$_POST[dop]')";
$result = pg_query($query); 
?>
