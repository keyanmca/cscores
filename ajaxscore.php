<?php
header("Expires: Sat, 1 Jan 2005 00:00:00 GMT");
header("Last-Modified: ".gmdate( "D, d M Y H:i:s")."GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
$json = file_get_contents("http://cricscore-api.appspot.com/csa?id=".$_GET["id"]);
$dcjson = json_decode($json);
echo "<div id=\"gametitle\">";
echo $dcjson[0]->si;
echo "</div><br/>";
echo $dcjson[0]->de;