
<html>

    <head><title></title></head>
    <body>

        <table width="640" border="1">
            <tr>
                <td>Título</td>
                <td>Intérprete</td>
                <td>Año</td>
            </tr>

            <?php foreach($lista as $obj){  ?>
            <tr>
                <td><?php echo $obj->getTitulo(); ?></td>
                <td><?php echo $obj->getInterprete(); ?></td>
                <td><?php echo $obj->getAnho(); ?></td>
            </tr>
            <?php } ?>

        </table>


    </body>
</html>
