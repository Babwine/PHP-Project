<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Catalogue</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


	<h1>Games :</h1>
	
<?php
	
	$content =     file_get_contents("http://api.steampowered.com/ISteamApps/GetAppList/v0002/");

	$result  = json_decode($content);

	$applist = $result->applist->apps;
	
	foreach ($applist as $app) {
		echo "<p>$app->name</p><br/>";
	}

?>

</body>
</html>
