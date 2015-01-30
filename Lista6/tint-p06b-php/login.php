<?php
session_start();
if (isset($_POST["sent"]))
{
  if (($_POST["user"]=="pawel") && ($_POST["password"]=="zaporozec")) 
  {
    $_SESSION["user"]=$_POST["user"];
	$_SESSION["password"]=sha1($_POST["password"]);
//	header("Location: authenticated.php?".session_name()."=".session_id());
    header("Location: authenticated.php");
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logowanie</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
td,th,body { font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt; }
</style>
</head>

<body>

<h3 align="center">Logowanie</h3>

<form name="login" action="login.php" method="post" enctype="application/x-www-form-urlencoded">
<?php
  if (isset($_POST["sent"]))
  {
    echo "<div align=\"center\" style=\"color: red; font-weight: bolder\">Błąd logowania</div><br>";
  }
?>
<table align="center" cellpadding="4" cellspacing="2" border="0" bgcolor="#FFFF66">
<tr><th align="left">Użytkownik:</th><td><input name="user" type="text" size="20" maxlength="20" value=""></td></tr>
<tr><th align="left">Hasło:</th><td><input name="password" type="password" size="20" maxlength="20" value=""></td></tr>
<tr><td align="right" colspan="2"><input type="submit" value="Zaloguj"></td></tr>
</table>
<input name="sent" type="hidden" value="tak">
</form>

</body>
</html> 