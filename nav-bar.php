<!DOCTYPE html>
<html>
<head>
	<title>RPG Organizer</title>
</head>
<style>


	.topnav {
		background-color: #c59c66;
		overflow: hidden;
	}
	.topnav a {
		float: left;
		color: #d8d6d4;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}
	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	.topnav a.active {
		background-color: #604b2f;
		color: white;
	}
</style>
<?php 
	if($section == "home"){
		echo "<style> body{ image-background: url("backdrop.jpg");} </style>"
	}
?>
<body>
	<div class="topnav">
		<a class="<?php if ($section == "home") { echo "active"; } ?>" href="index.php">Home</a>
		<a class="<?php if ($section == "news") { echo "active"; } ?>" href="news.php">News</a>
		<a class="<?php if ($section == "login") { echo "active"; } ?>" href="login.php">Login</a>
		<a class="<?php if ($section == "register") { echo "active"; } ?>" href="register.php">Register</a>
	</div>

</html>