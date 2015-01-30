<?php
  if ( isset( $_POST["sent"] ) && ( $_POST["user"]=="pawel" ) && ( $_POST["password"]=="tajnehaslo" ) )
  {
  	$IsAutheticated=true;  	
  }
  else
  {
  	$IsAutheticated=false;
  }
?>
<?php
if (!$IsAutheticated):
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

<form name="login" action="simplelogin2.php" method="post" enctype="application/x-www-form-urlencoded">
<?php
  if ( isset( $_POST["sent"] ) )
  {
    echo "<div align=\"center\" style=\"color: red; font-weight: bolder\">Błąd logowania</div><br>";
  }
?>
<table align="center" cellpadding="4" cellspacing="2" border="0" bgcolor="#FFFF66">
<tr><th align="left">Użytkownik:</th><td><input name="user" type="text" size="20" maxlength="20" value=""></td></tr>
<tr><th align="left">Hasło:</th><td><input name="password" type="password" size="20" maxlength="20" value=""></td></tr>
<tr><td align="right" colspan="2"><input type="submit" value="Zaloguj"></td></tr>
</table>
<input name="sent" type="hidden" value="y">
</form>

</body>
</html>
<?php
else:
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

<h3 align="center">Jesteś w strefie o ograniczonym dostępie</h3>

</body>
</html>
<?php endif; ?>