




<form method="post" action="../Controlador/CarrosControlador.php">

    <input name="marca"
           value="<?php echo (!empty ($marcaEditable)) ? $marcaEditable : '' ?>"
           placeholder="Escriba la marca"
           type="text">
    <br>

    <input name="modelo"
           value="<?php echo (!empty ($modeloEditable)) ? $modeloEditable : '' ?>"
           placeholder="Escriba el modelo"
           type="text">
    <br>

    <br>
    <br>
    <input name="<?php echo (!empty ($marcaEditable)) ? 'guardar' : 'agregar'?>"

           value="Agregar carro"
           type="submit">
</form>


<?php


foreach ($carros as $k => $v) {

    ?>

    <p><?php echo $v['marca'];?></p>
    <p> <a href="../controlador/CarrosControlador.php?opcion=eliminar&id=<?php echo $v['id']; ?>">Eliminar
        </a> <p> <a href="../controlador/CarrosControlador.php?opcion=editar&id=<?php echo $v['id']; ?>">Editar
        </a>
    </p>
    <?php
}
?>



