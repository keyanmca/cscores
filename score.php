<!DOCTYPE html>
<html>
    <head>
        <title>
            Live cricket scores
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript">
            function getscore(){
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","ajaxscore.php?id=<?php echo $_GET["id"]; ?>",false);
                xmlhttp.send();
                document.getElementById("score").innerHTML=xmlhttp.responseText;
            }
            function doscoreinit(){
                setInterval(getscore,1000);   
            }
        </script>
    </head>
    <body onload="doscoreinit();"> <div align="center">
        <big><big>
        <div id="score">
        Loading...
        </div><br/><br/>
        <a href="index.php">Back Home</a> </big></big></div>
    </body>
</html>
