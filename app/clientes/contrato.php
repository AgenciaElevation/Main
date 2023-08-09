<?php
session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $ID = $_SESSION['ID'];

    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaID($ID);
    $plano = $cliente->getPlano();

    if ($plano == 'google') {
        header('Location: contrato-google.php');
    } else {
        header('Location: contrato-site.php');
    }

} else {
    header('Location: ../../index.php');
}
?>
