<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Modificar persona</title>
    </head>
    <body>
        <h2>Modificar persona</h2>
        <form action="" method="POST">
            <?php foreach ($mod as $fila){ ?>
            <input type="email" name="email" value="<?=$fila->email?>"/>
            <input type="text"  name="password" value="<?=$fila->password?>"/>
            <input type="text" name="nombre" value="<?=$fila->nombre?>"/>
            <input type="text" name="apellido" value="<?=$fila->apellido?>"/>
            <input type="number" name="id" value="<?=$fila->id?>"/>
            <input type="submit" name="submit" value="Modificar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
    </body>
</html>