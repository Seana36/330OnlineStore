<?php
$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title> WB </title>
	<link rel = 'stylesheet' type = 'text/css' href = './style.css' />
</head>
<body>
	<div id = 'container'>
		<div id = 'header'>
			<h2 style = 'text-align:center;'> Welcome to WB! </h2>
				<p style = 'text-align:center;'> <a href = './index.php?view_cart=1'> View Cart </a> </p>
		</div>
		<div id = 'content'>
HTML;
$footer = <<<HTML
		</div> <!-- End content-->
		</div> <!-- End container-->
</body>
</html>
HTML;
?>