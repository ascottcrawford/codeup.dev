
<?php


if (isset($_GET['counter'])) {
 	$page = $_GET['counter'];
} else {
	$page = 0;
}


var_dump($_GET);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1>PHP Counter = <?= $page?></h1>
	<p>
		
	
		<a href= <?= "counter.php?counter=" . ($page+1);?> >UP</a>
		<a href= <?= "counter.php?counter=" . ($page-1);?> >Down</a>


		
	</p>



</body>
</html>