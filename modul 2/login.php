<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Login</title>
   <script type="text/javascript">
		function check()
		{
			if(form1.user.value == ""){
				alert('input username');
				document.form1.user.focus();
				return false;	}
			
			else if(form1.pass.value==""){    
				alert('input the password');
				document.form1.pass.focus();
				return false;	}    
			return true;
		}

		function Huruf(evt) 
		{
			evt = (evt) ? evt : window.event
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
				alert('just the character');
				return false;			}
			return true; }
	</script>

	<style type="text/css">
	#kotak {
		position:absolute;
		width:300px;
		height:330px;
		z-index:1;
		left: 443px;
		top: 77px;
		background-color: gold;
		border: 4px solid Black;}

	body {
		background-color: green; }
</style>

</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="kotak">
	<div id="header">
		<br>
	</div>
  
	<div>
		<div align="center"><strong><br>Username :</strong> <br>
			<input type="text" name="user" size="33" value="" title="Input by character" autocomplete="off" onKeyPress="return Huruf(event)">	<br> <br>
			<strong> Password : </strong>  <br>
			<input type="password" name="pass" size="33" title="Input by character" autocomplete="off" onKeyPress="return Huruf(event)"> <br>	<br>
		</div>
	</div>
	<br>
    
	<div align="center">
		<input type="submit" name="submit" value=" LOGIN " >
    </div>
</div>
</form>

</body>
</html>