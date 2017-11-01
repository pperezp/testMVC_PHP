<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Header</h1>

        <div id="content">
            <?php
            $enlace = new EnlaceController();
            $enlace->actionController();
            ?>
        </div>

        <div>Footer</div>
    </body>
</html>