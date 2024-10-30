<?php

header("Cache-Control: max-age=10");

?>
<html>
<head>
<link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
    <body>
    안녕하세요 엘리스 여러분
    <br>
    <?php
        date_default_timezone_set("Asia/Seoul");
        Print(date(DATE_RFC822));
    ?>
    <br>
    <img src="Elice_Image.png">
    </body>
</html>