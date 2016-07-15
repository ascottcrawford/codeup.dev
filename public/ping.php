<?php 

f (isset($_GET['counter'])) {
 	$page = $_GET['counter'];
} else {
	$page = 0;
}


var_dump($_GET);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PING</title>
</head>
<body>
	<h1>PHP Counter = <?= $page?></h1>
	<p>
		
	
		<a href= <?= "pong.php?hitcounter=" . ($page+1);?> >Hit</a>
		<a href= <?= "pong.php?misscounter=" . ($page-1);?> >Miss</a>


		
	</p>



</body>
</html>