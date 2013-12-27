<!DOCTYPE html>
<html>
    <head>
        <title>
            Live cricket scores
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body><div align="center"><big><big><big><big>
        <?php
$json = file_get_contents("http://cricscore-api.appspot.com/csa");          
$dcjson = json_decode($json);
$arrlength=count($dcjson);
for($x=0;$x<$arrlength;$x++)
{
    echo "<a href=\"score.php?id=".$dcjson[$x]->id."\">".$dcjson[$x]->t1." vs ".$dcjson[$x]->t2."</a>";
    echo "<br/>";
}
?></big></big></big></big></div>
    </body>
</html>