<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">	
<title>Login</title>

</head>
<style>
div.container {
				width: 100%;


			}
		
header{
				padding: 1px;
				color: white;
				background-color: black;
				clear: left;
				text-align: left;
				top:0;
				width:100%;
				}
				
h1{ 
		color: white;
		font-family: Rancho;
		font-size: 300%;
	  
}

footer	{		padding: 1em;
				color: white;
				background-color: black;
				clear: left;
				text-align: center;
				position:absolute;
				bottom:0;
				width:96.65%;
}


</style>
<body><center>
	<div class="container">
	<header><center>
		<h1>Travel Story</h1>
	</header>


<form action="login.php" method="post">
<table border="0" cellpadding="5" cellspacing="10"style="border: 5px solid #eee"><center>
 
	<tbody>
		<tr>
			<td><font face="Verdana"><font size="3">Username</font></td>
			<td>:</td>
			<td><input type="username" name="username" maxlength="50" required="required" /></td>
		</tr>
		
		<tr>
			<td><font face="Verdana"><font size="3">Password</font></td>
			<td>:</td>
			<td><input type="password" name="password" maxlength="" required="required" /></td>
		</tr>
	<!---	<tr>
		<td>
			<div class="checkbox"colspan="2">
        <label><font face="Verdana"><font size="3"><input type="checkbox"> Remember me</font></label>
			</div>
		</td>
		</tr> -->
		
		<tr>
			<td align="center" colspan="3"> <input type="submit" name="Login" value= "Login"/></td>
		</tr>
	<br>	
			<td align="center" colspan="3">	
			<p><center><font face="Verdana"><font size="3">Have no account ?</font></p>
			</td>
			
			<tr>
			<td align="center" colspan="3">	
			<center><font face="Verdana"<font size="2"><a href="Register.html"><p>Create Account</a> </font>
			</td>
			</tr>
			
			
	<br>
	
</tbody>
</table>
</form>

<footer>Copyright &copy;SquadArt</footer>	
</body>
</html>