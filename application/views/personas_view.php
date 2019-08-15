<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>CRUD con CodeIgniter</title>

        <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!-- Popper JS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">

                <h2>Crud con CodeIgniter</h2>
                <?php
                //Si existen las sesiones flasdata que se muestren
                    if($this->session->flashdata('correcto'))
                        echo $this->session->flashdata('correcto');

                    if($this->session->flashdata('incorrecto'))
                        echo $this->session->flashdata('incorrecto');
                ?>
        <table border="1" class="table table-hover">
            <tr>
                <form action="<?=base_url("personas_controller/add");?>" method="post">
                    <td></td>
                    <td>
                       <input placeholder="email" type="email" name="email"required/>
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
                    <td align="center">
                        <input type="submit" name="submit" value="+" class="btn btn-dark">
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
                    <a href="<?=base_url("personas_controller/mod/$fila->id_persona")?>" class="btn btn-secondary">U</a>
                    <a href="<?=base_url("personas_controller/eliminar/$fila->id_persona")?>" class="btn btn-danger">-</a>
                </td>
            </tr>
        <?php

        }
        ?>
        </table>

        </div>
    </body>
</html>