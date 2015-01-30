<?php
    header('Content-Type: application/x-www-form-urlencoded');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    $error = "";
    if(strlen($_POST["login"]) < 5)
        $error .= "Login should be at least 5 character long<br/>";
    if(strlen($_POST["pass"]) < 8)
        $error .= "Password should be at least 8 character long<br/>";
    if($_POST["pass"] != $_POST["confirm"])
        $error .= "Password do not match<br/>";

    preg_match("/\d{2}.\d{2}.\d{2}/", $_POST["birth"], $out);
    if(empty($out))
    {
        $error .= "Type your birth date<br/>";
    }
    /*else
    {
        preg_match_all("/\d{2}/", $out[0], $array);
        if($array[0] >31 || $array[1] > 12)
            $error .= "Wrong date<br/>";
    }*/
    if($error == "")
        echo "Everything Ok.<br/>";
    else
        echo $error;
?>