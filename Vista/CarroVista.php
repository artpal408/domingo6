




<form method="post" action="../Controlador/CarrosControlador.php">

    <input name="marca"
           placeholder="Escriba la marca"
           type="text">
    <br>

    <input name="modelo"
           placeholder="Escriba el modelo"
           type="text">
    <br>

    <br>
    <br>
    <input name="agregar"
           value="Agregar carro"
           type="submit">
</form>


<?php


foreach ($carros as $k => $v) {

    ?>

    <p><?php echo $v['marca'];?></p>
    <p> <a href="../controlador/CarrosControlador.php?opcion=eliminar&id=<?php echo $v['id']; ?>">Eliminar
        </a>
    </p>
    <?php
}
?>



