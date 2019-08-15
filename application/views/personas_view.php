<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>CRUD con CodeIgniter</title>
    </head>
    <body>
        <h2>Crud con CodeIgniter</h2>
        <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');

            if($this->session->flashdata('incorrecto'))
                echo $this->session->flashdata('incorrecto');
        ?>
<table border="1">
    <tr>
        <form action="<?=base_url("personas_controller/add");?>" method="post">
            <td></td>
            <td>
               <input placeholder="email" type="email" name="email" required/>
            </td>
            <td>
               <input placeholder="password" type="text" name="password" required/>
            </td>
            <td>
                <input placeholder="nombre" type="text" name="nombre" required/>
            </td>
            <td>
                <input placeholder="apellido" type="text" name="apellido" required/>
            </td>
            <td>
                <input placeholder="id usuario" type="number" name="id" required/>
            </td>
            <td>
                <input type="submit" name="submit" value="Añadir" required/>
            </td>
        </form>
    </tr>
<?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->id_persona;?>
        </td>
        <td>
            <?=$fila->email;?>
        </td>
        <td>
            <?=$fila->password;?>
        </td>
        <td>
            <?=$fila->nombre;?>
        </td>
        <td>
            <?=$fila->apellido;?>
        </td>
        <td>
            <?=$fila->id;?>
        </td>
        <td>
            <a href="<?=base_url("personas_controller/mod/$fila->id_persona")?>">Modificar</a>
            <a href="<?=base_url("personas_controller/eliminar/$fila->id_persona")?>">Eliminar</a>
        </td>
    </tr>
<?php

}
?>
</table>
    </body>
</html>