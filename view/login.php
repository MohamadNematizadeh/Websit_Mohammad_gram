<?php
$username =$_POST["username"];
$pessword = $_POST["pessword"];
if ($username =="mohammad" && $pessword ="09156006138")
{
    $_SESSION["login_status"] = true;
 header("Location:home");
}
else
{
    header("Location:index");

}

?>