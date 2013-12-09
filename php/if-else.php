<html>

<?php
	$p = 700;
	$q = 777;

	if($p == $q) {
		$hasil = "Argument Bener";} 
	else {
		$hasil = "Argument Salah";}
	echo "$p == $q --> $hasil <br>";

	if($p != $q) {
		$hasil = "Argument Bener";} 
	else {
		$hasil = "Argument Salah";}
	echo "$p != $q --> $hasil <br>";

	if($p < $q) {
		$hasil = "Argument Bener";} 
	else {
		$hasil = "Argument Salah";}
	echo "$p < $q --> $hasil <br>";

	if($p > $q) {
		$hasil = "Argument Bener";}
	else {
		$hasil = "Argument Salah";}
	echo "$p > $q --> $hasil <br>";
?>

</html>