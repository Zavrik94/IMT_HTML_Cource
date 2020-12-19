<?php 
	$contentLine = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Module12</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
		<header>
			<p>header</p>
		</header>
		<nav>
			menu
		</nav>
		<div>
			<div>
				left-panel
			</div>
			<div>
				<?php for ($i = 0; $i < $contentLine; $i++ ) {?>
					content<br>
				<?php } ?>
			</div>
			<div>
				info
			</div>
		</div>
		<footer>
			footer
		</footer>
	</div>
</body>
</html>