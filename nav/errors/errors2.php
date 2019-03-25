<?php 	
	ini_set('display_errors', 'Off');
	$result = array();
	if(empty($_POST['errors'])){
		$result = $_SESSION['errors-reg'];
	}
?>
<?php foreach ($result as $error) : ?>
			<p><?php echo $error ?></p>
<?php endforeach; //session_destroy(); ?>