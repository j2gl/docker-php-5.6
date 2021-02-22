
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
<h1>db connection test</h1>
<?php
error_reporting(E_ERROR | E_WARNING);
if (mysql_connect('old-php-56-mysql', 'root', 'phpdbsecret')) {
	$query = 'SELECT @@version AS version';
	$result = mysql_query($query);
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }
    $row = mysql_fetch_row($result);
    echo "<p>Success! mysql version <b>" . $row[0] . "</b> is ruuning</p>";
}
else  {
	print mysql_error();
}
?>
</body>
</html>