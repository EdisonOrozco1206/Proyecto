<?php include($_SERVER["DOCUMENT_ROOT"].'/Proyecto/layouts/header.php') ?>

<link rel="stylesheet" href="<?= SCRIPT_ROOT ?>back-office/styles-bo.css">
<div class="container_bo">
    <div class="form-container admin-container">
        <h1>Bienvenido Administrador</h1>
        <a class="btnFill" href="./usuarios/lista.php">Gestion de usuarios</a>
        <a class="btnFill" href="./sedes/lista.php">Gestion de sedes</a>
    </div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"].'/Proyecto/layouts/footer.php') ?>
