<?php
define('SCRIPT_ROOT', '//localhost/Proyecto/');
if (isset($_GET['id'])) {

    include($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/database/bd.php');

    $query = mysqli_query($connect, "SELECT * FROM usuarios WHERE id = '" . $_GET['id'] . "';");

    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    if (!isset($data[0])) {
        echo "
        <script>
        confirm('registro no encontrado');
        window.location.href = '" . SCRIPT_ROOT . "back-office//admin/usuarios/lista.php';
        </script>
        ";
    } else {
        $query = mysqli_query($connect, "DELETE  FROM usuarios WHERE id = '" . $_GET['id'] . "';");
        if ($query) {
       

            echo "
            <script>
            confirm('borrado exitoso');
            window.location.href = '" . SCRIPT_ROOT . "back-office//admin/usuarios/lista.php';
            </script>
            ";
        } else {
            echo "
            <script>
            confirm('ha ocurrido un error');
            </script>";
        }
    }
}else{
    echo "
    <script>
    confirm('registro no encontrado');
    window.location.href = '" . SCRIPT_ROOT . "back-office//admin/usuarios/lista.php';
    </script>
    ";
}
?>

<link rel="stylesheet" href="<?= SCRIPT_ROOT ?>back-office/styles-bo.css">