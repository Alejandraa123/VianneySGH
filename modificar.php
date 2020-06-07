<html>
<head><title>IWI</title></head>
    <body>
    <center>
         <?php
                 $id=$_REQUEST['id'];
                 include("conexion.php");
                    $query="SELECT * FROM usuarios WHERE id='$id'";
                    $resultado= $conexion->query($query);
                  $row=$resultado->fetch_assoc();
                 ?> 
        <form action="modificar_proseso.php?id=<?php echo $row['id']; ?>" method="POST">
            
            
            
            <input type="text" REQUIRED name="nombre" placeholder="nombre..." value="<?php echo $row['nombre'];?>" /><br>
            <input type="text" REQUIRED name="apellido" placeholder="apellido..." value="<?php echo $row['apellido'];?>" /><br>
            <input type="text" REQUIRED name="correo" placeholder="correo..." value="<?php echo $row['correo'];?>" /><br>
            <input type="submit" value="aceptar"/>
        </form>
        </center>
    </body>
</html>