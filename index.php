<?php
$q = $_GET['q'];
$res = exec("grep ^\"".$q."\" links.txt | cut  -f2");
if ($res) 
{
   header("Location: ".$res);
   exit;
}
else
{
    header("Location: /404.html");
}
?>
