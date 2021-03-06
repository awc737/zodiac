<?php 
include '../paths.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Zodiac</title>
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/default.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<div class="row">
		<?php include 'partials/header.html'; ?>
	</div>

	<div class="row">
		<?php include 'partials/feed.html'; ?>
		<?php include 'partials/side-left.html'; ?>
		<?php include 'partials/side-right.html'; ?>
	</div>

</body>
</html>