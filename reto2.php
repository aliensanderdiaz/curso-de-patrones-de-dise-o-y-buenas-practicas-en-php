<?php
$numero = $_POST['Numero'];

function imprimir($numero, $iteracion)
{
    return "$numero x $iteracion";
}

function multiplicar($numeroA, $numeroB)
{
    return $numeroA * $numeroB;
}

function factorial($numero)
{
    $factorial = 1;

    for ($f = $numero; $f >= 1; $f--) {
        $factorial *= $f;
    }

    return $factorial;
}
?>
<table border="1">
    <?php for ($i = 0; $i <= 10; $i++) : ?>
        <tr>
            <td><?php echo imprimir($numero, $i); ?></td>
            <td><?php echo multiplicar($numero, $i); ?></td>
        </tr>
    <?php endfor; ?>

    <tr>
        <td><?php echo "$numero!"; ?></td>
        <td><?php echo factorial($numero); ?></td>
    </tr>
</table>