<?php
  function callback( $buffer )  
  {
    return ( str_replace( "Wielki", "Mały", $buffer ) );
  }
  ob_start( "callback" );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ciasteczka</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
td,th,body { font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt; }
</style>
</head>

<body>

<h3>Wartość ciastka</h3>

<p>Wielki test ciasteczek</p>

<?php
  setcookie( "sernik", "z czekoladą", time()+3600 );
//  setcookie( "sernik", "", time() - 3600 ); 
?>

Ciasteczko: <?php echo $_COOKIE["sernik"]; ?>

</body>
</html>
<?php
ob_end_flush();
?>