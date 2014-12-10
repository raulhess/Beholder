<html>
<head>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>Beholder Caolho</title>
<link href="css/main.css" rel="stylesheet">
<script type="text/javascript" src="js/basic.js"></script>
</head>
<body>
	<?php
		$section = $_GET['section'];
		if($section != false){
			$section = $section . "/";
		}
		include $section.'header.html';
		include $section.'mobile-menu.html';
		include $section.'menu.php';
		include $section.'content.php'
	?>
</body>
</html>
