<?php
require 'variables.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <link type="text/css" rel="stylesheet" href="style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
        <?php
        require 'menu.php';
        ?>
        <?php
        require 'valores.php';
        ?>

        <script type="text/javascript">            
            $("p").on({
                mouseenter: function () {
                    $(this).css("background-color", "lightgray");
                },
                mouseleave: function () {
                    $(this).css("background-color", "lightblue");
                },
                click: function () {
                    $(this).css("background-color", "yellow");
                }
            });
        </script>
    </body>
</html>
