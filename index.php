<?php
session_start();
$request = $_SERVER["REQUEST_URI"];

switch ($request)
{
    case("/monagram"):
    case("/monagram/"):
    case("/monagram/index"):
        require __DIR__ . "/view/index.php";
        break;

        case("/monagram/home"):
            require __DIR__ . "/view/home.php";
            break;

            case("/monagram/register"):
                require __DIR__ . "/controller/register.php";
                break;

                case("/monagram/di"):
                    require __DIR__ . "/controller/di.php";
                    break;
                    
                case("/monagram/profilepage"):
                    require __DIR__ . "/view/profilepage.php";
                    break;
                        case("/monagram/login"):
                            require __DIR__ . "/view/login.php";
                            break;
                            case("/monagram/logout"):
                                require __DIR__ . "/view/logout.php";
                                break;
                                case("/monagram/post"):
                                    require __DIR__ . "/controller/post.php";
                                    break;
                                    case("/monagram/add_post"):
                                        require __DIR__ . "/controller/add_post_proccess.php";
                                        break;
                default:
                require __DIR__ . "/view/404.php";
                break;
                
}
?>