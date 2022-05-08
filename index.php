<?php
$request = $_SERVER["REQUEST_URI"];

switch ($request)
{
    case("/mohammadgram"):
    case("/mohammadgram/"):
    case("/mohammadgram/index.php"):
        require __DIR__ . "/view/personal profile page.php";
        break;
        case("/mohammadgram/hom.php"):
            require __DIR__ . "/view/hom.php";
            break;
            case("/mohammadgram/profilepage.php"):
                require __DIR__ . "/view/profilepage.php";
                break;


     

}
?>