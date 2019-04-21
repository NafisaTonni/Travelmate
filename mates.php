<!DOCTYPE html>
<html>
<?php
if(!isset($_SESSION))
{
	session_start();

	include('findmate.php');
}
?>
<?p
<head>

	<style type="text/css">
		.main{
			height: 1000px;
			width: 1000px;
		}
.contant{
	height: 1000px;
	width: 1000px;
}
	</style>
	<title></title>
</head>
<body>
	<div class="main">
		<div class="contant">
			<p> Traveler:<?php echo $name ?></p>
			<p> Description: <?php echo $des ?></p>
			<p> From: <?php echo $indate ?></p>
			<p> To: <?php echo $outdate ?></p>
		</div>
	</div>

</body>
</html>