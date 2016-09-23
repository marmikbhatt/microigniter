<!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php
		$this->load('url');
		$this->view('header.php');
		?>
	</head>
<body>
	<h3>First View</h3>
	<b><?php echo $title; ?></b>
	<hr/>
	<b>
	<?php 
	print_r($this->url->project_url());
	?>
	</b>
</body>
</html>