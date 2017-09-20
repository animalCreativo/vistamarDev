
<?php

include('languages/lang.php');

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
<h1><?php
  echo $lang['firstname'];
?></h3>
<div style="margin-top: 50px;">
Languages:
<a href="?lang=es">Es</a>
<a href="?lang=en">En</a>
</div>

</body>
</html>