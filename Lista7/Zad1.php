<?php
    header('Content-Type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    $zwrot = "<root>";
    switch($_POST["city"])
    {
        case "Krakow":
            $zwrot.= "<img>krakow.jpg</img><desc>Krakow</desc>";
            break;
        case "Wroclaw":
            $zwrot .= "<img>obraz.jpg</img><desc>Wroclaw</desc>";
            break;
        default:
            $zwrot.= "3";
    }
    echo $zwrot.="</root>";
?>