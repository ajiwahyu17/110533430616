<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Autentikasi</title>
<style type="text/css">
.inner{
		margin:230px auto;
		padding:20px;
		width:240px;
		border:2px solid #333;
	}
</style>
</head>

<body>
	<?php
		ini_set('display_errors', 1);
		define('_VALID', 1);
		require_once('./auth.php');
		init_login();
		validate();
	?>

	<p align="right"><a href="?m=logout">keluar</a></p><br/>
	<h1 align="center"><marquee><strong>SIFAT - SIFAT MANUSIA</strong></marquee></h3>
	<p align="center">
	<a href="?m=logout"></a>
		<h4><ul>
			<li>SEMANGAT</li>
			<li>MUDAH MARAH</li>
			<li>SABAR</li>
			<li>PEMBERANI</li>
			<li>PEMALU</li>
			<li>RAJIN</li>
			<li>MALAS</li>
		</ul></h4>
</body>
</html>