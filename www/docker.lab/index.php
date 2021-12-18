<?php
    $db = new PDO("mysql:host=mysql;dbname=dbname", "root", "password123");
    $db -> exec("set names utf8");
?>
<html>
<head>
<title>
DockerLab10
</title>
</head>
<body>
<?php
	$body = '';
	foreach ($db->query('SELECT id, name FROM dbname.test') as $row)
	{
		$body .= "<p>";
		$body .= $row['id'];
		$body .= " ";
		$body .= $row['name'];
		$body .= "</p>";
	}
	echo $body;
?>
</body>
</html>