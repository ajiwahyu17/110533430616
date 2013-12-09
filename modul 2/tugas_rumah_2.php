<html>
<head>
	<title>Check Box</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Presiden Terbaik Indonesia : <br/>
	<input type="checkbox" name="pres1" value="soekarno" checked/>Soekarno <br/>
	<input type="checkbox" name="pres2" value="soeharto"/>Soeharto <br/>
	<input type="checkbox" name="pres3" value="habibie"/>B.J. Habibie <br/>
	<input type="checkbox" name="pres4" value="Gus Dur"/>Abdurrahman wahid <br/>
	<input type="checkbox" name="pres5" value="Megawati"/>Mega wati soekarno putri <br/>
	<input type="checkbox" name="pres6" value="SBY"/>Susilo Bambang Yudhoyono <br/>
	<input type="submit" value="Submit"/>
</form>

<?php
if(isset($_POST['pres1'])) {
echo $_POST['pres1'];
echo "<br/>";}

if(isset($_POST['pres2'])) {
echo $_POST['pres2'];
echo "<br/>";}

if(isset($_POST['pres3'])) {
echo $_POST['pres3'];
echo "<br/>";}

if(isset($_POST['pres4'])) {
echo $_POST['pres4'];
echo "<br/>";}

if(isset($_POST['pres5'])) {
echo $_POST['pres5'];
echo "<br/>";}

if(isset($_POST['pres6'])) {
echo $_POST['pres6'];
echo "<br/>";}

?>
</body>
</html>