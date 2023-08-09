
<?php
	$cor = $_POST['cor'];

	require_once('../layout.php');
	$layout = new layout();
	$cor = $layout->mudarCor($cor);
	
?>