<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" type="text/css" href="css/estilito.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body  class="opa">
<div  style="position:absolute; top:13px; left:15px;">
<form >
    <button id="bott"  type="button" class="btn btn-primary" onclick = "location='/lab07'"  >Regresar al registro</button>
</form>                            
</div>
   <div class="" id="capa">
   <center>
        <br><br>
        <h1>Lista de libros</h1>
        <div id="form">
        <?php
        if (isset($_GET['edit'])){
            ?>
            <form  method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="titu" placeholder="titulo" value="<?php if(isset($_GET['edit'])) echo $getROW['titu']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="autor" placeholder="Autor" value="<?php if(isset($_GET['edit'])) echo $getROW['autor']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="ano" placeholder="Año" value="<?php if(isset($_GET['edit'])) echo $getROW['ano']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="urle" placeholder="Enlace del libro" value="<?php if(isset($_GET['edit'])) echo $getROW['urle']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="espe" placeholder="Especialidad" value="<?php if(isset($_GET['edit'])) echo $getROW['espe']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                    <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <input type="text" name="edito" placeholder="Editorial" value="<?php if(isset($_GET['edit'])) echo $getROW['edito']; ?>">
                            <?php
                       }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td id="arriba" >
                       <?php
                       if(isset($_GET['edit'])){
                            ?>
                            <button type="submit" class="btn btn-outline-primary" name="update">Editar</button>
                            <?php
                       }
                       ?>
                    </td>
                </tr>   
            </table>
        </form>      
            <?php
        }
        ?> 
        <br><br>
        </div>
    </center>
  <div class="container table-responsive">
  <table class="table table-primary  table-bordered border-primary table-hover caption-top">
        <thead >
            <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Año</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Editorial</th>
            <th scope="col">📖</th>
            <th scope="col">📝</th>
            <th scope="col">🗑️</th>
            </tr>
        </thead>
        <?php
        $res = $MySQLiconn->query("SELECT * FROM libros");
        while ($row=$res->fetch_array()) {
        ?>
        <tbody>
            <tr>
            <td><?php echo $row['titu']; ?></td>
            <td><?php echo $row['autor']; ?></td>
            <td><?php echo $row['ano']; ?></td>
            <td><?php echo $row['espe']; ?></td>
            <td><?php echo $row['edito']; ?></td>
            <td><a href="<?php echo $row['urle']; ?>" target="_blank">Leer</a></td>      
            <td><a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('Confirmar edicion')">Editar</a></td>
            <td><a href="?del=<?php echo $row['id'];?>" onclick="return confirm('Confirmar eliminacion')">Eliminar</a></td>
            </tr>   
        </tbody>
        <?php
        }
        ?>
    </table>      
  </div>
   </div>
</body>
</html>



