<?php
function not_found()
{
    header("Location: /404.html");
}

function home_page()
{
    echo "<h1>shrt</h1>";
}


$q = $_GET['q'];
if (strlen($q) > 0) 
{
    $res = exec("grep ^\"".$q."\" links.txt | cut  -f2");
    if ($res) 
    {
       header("Location: ".$res);
       exit;
    }
    else
    {
        not_found();
    }

} 
else 
{
    home_page();
}
?>
