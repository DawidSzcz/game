<?php
  session_start();
  if (!(isset($_SESSION["user"]) && isset($_SESSION["password"])))
  {
    header("Location: login.php");
  }
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pokaz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
td,th,body { font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt; }
</style>
</head>

<body>
<p>Ten tekst się pojawi tylko dla zalogowanych</p>
<p>Aktualnie zalogowany użytkownik: <?php echo $_SESSION["user"]; ?></p>
<p>Hasło aktualnie zalogowanego użytkownika: <?php echo $_SESSION["password"]; ?></p>
</body>
</html> 