<?php 



$head = <<<END
<!DOCTYPE html>
<html>
<head>
	<title>Sellit</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="js/jq.js" type="text/javascript"></script>
	<script src="js/js.js" type="text/javascript"></script>
</head>
<body>
	
		<header>
	<div id="wrapper">
			<img src="img/logo.png" class="logo">


	</div>		
		</header>
			<div id="wrapper">
			<div id="content">
END;

$search =<<<END


			<!-- SÖKFUNKTION -->
			<div id="padding">
			<form id="searchbox" method="get" action="http://www.google.com">
			        <input type="text" class="searchbox" name="q" size="21" maxlength="120">
			</form>
		
			</div>
			<!-- SÖKFUNKTION SLUT -->

END;

$footer =<<<END
		</div> 	<!-- CONTENT SLUT -->
	</div>		<!-- WRAPPER SLUT -->
		<footer>
	<div id="wrapper">

	</div>
		</footer>
	</div>
</body>
</html>
END;



 ?>