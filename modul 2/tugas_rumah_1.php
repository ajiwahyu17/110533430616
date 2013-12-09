<html>
<head>
	<title>Penanganan Seleksi</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Pendidikan Terkahir </br>
		<input type="radio" name="pt" value="SD" checked/>Sekolah Dasar (sederajat) </br>
		<input type="radio" name="pt" value="SMP"/>Sekolah Menengah Pertama (sederajat) </br>
		<input type="radio" name="pt" value="SMA"/>Sekolah Menengah Atas(sederajat) </br>
		<input type="radio" name="pt" value="S1"/>Sarjanah </br>
		<input type="radio" name="pt" value="S2"/>Magister </br>
		<input type="submit" value="ok"/>
	</form>
	
	<?php
	if(isset($_POST['pt'])) {
		echo $_POST['pt']; }
	?>
</body>
</html>