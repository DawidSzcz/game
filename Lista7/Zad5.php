<?php
    $names = file("imiona.txt");
    $amount = 0;
    $length = strlen($_POST["name"]);
    $zwrot = "";
    for($i = 0; $i < count($names) && $amount < 10;$i++)
        if(substr($names[$i], 4, $length) == $_POST["name"])
        {
            $zwrot.=substr($names[$i], 4).",";
            $amount++;
        }
    echo $zwrot;
?>