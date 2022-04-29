<?php
include_once 'crud.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de libros</title>
    <link rel="stylesheet" type="text/css" href="css/miestilo1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="opa" style="overflow-y:hidden">
    <div class="" id="capa">
    <center>
        <br><br>
        <div id="form">
        <h1>Registro de Libros</h1>
          
            <form  method="post">
            <table width="100%" border="1" cellpadding="11">
                <tr>
                    <td id="arriba" >
                        <input type="text" name="titu" placeholder="Título"   >
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                        <input type="text" name="autor" placeholder="Autor" >
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                        <input type="text" name="ano" placeholder="Año"  >
                            
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                        <input type="text" name="urle" placeholder="Enlace del libro"  >
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                        <input type="text" name="espe" placeholder="Especialidad"  >
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                        <input type="text" name="edito" placeholder="Editorial"  >
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                        <button type="submit" class="btn btn-primary btn-lg" name="save" onclick="show()">Registrar</button>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <button style="background-color: #c1d83f; color: black; border-radius: 8px;" name="listado" type="button" class="btn btn-primary" onclick = "location='/lab07/listado.php'" >Ver Libros </button>
                    </td>
                </tr>
                    <script>
                        function show() {
                            alert("Registrado correctamente");
                        }
                    </script>
            </table>
        </form>  
        <br>
        </div>
    </center>
    </div>
</body>
</html>