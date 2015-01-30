<?php
    
    setcookie('zucker2', 'klassasa',time()+100, "/Lista6/", "localhost","",true); // Wartosc nie moze byc '' 0_o
    // siodmy argument - httpOnly
/*
Session cookies - these are temporary cookie files, which are erased when you close your browser. When you restart your browser and go back to the site that created the cookie, the website will not recognize you. You will have to log back in (if login is required) or select your preferences/themes again if the site uses these features. A new session cookie will be generated, which will store your browsing information and will be active until you leave the site and close your browser. More on session cookies.

Persistent cookies – these files stay in one of your browser's subfolders until you delete them manually or your browser deletes them based on the duration period contained within the persistent cookie's file (more on persistent cookies).
*/
?> 
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8" />
        <script type="application/javascript" src="jquery-1.11.1.js"></script>
	</head>
	<body>
        <?php 
            echo var_dump($_GET);
            echo var_dump($_SERVER);
            echo var_dump($_POST);
            echo var_dump($_FILES);
            echo var_dump($_COOKIE);
        ?>
        <script type="application/javascript">
            $("body").append(document.cookie)
        </script>
	</body>
</html>