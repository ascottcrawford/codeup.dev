<?php

$favoriteThings = ['Movies', 'Legos', 'MegaBlocks', 'SuperMan', 'Batman'];

?>

<!DOCTYPE html>	
<html>
<head>
	<title>Favorite Things</title>
	<style> 
	tr:nth-child(even) {background: #CCC};
	tr:nth-child(odd) {background: #FFF};
	</style>

</head>
<body>
	<h1>My Favorite Things</h1>
    <table>
    <?php foreach ($favoriteThings as $favoriteThing) { ?>
        <tr><td><?php echo $favoriteThing; ?></tr></td>
    <?php } ?>
    </table>

</body>
</html>