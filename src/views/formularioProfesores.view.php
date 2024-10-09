<?php include 'partials/header.view.php'; ?>
<h3>formulario de profesores</h3>
<form action="formularioAlumnos" class="formulario" method="POST">
    <label for="Nombre">Nombre <input class="border_input" name="Nombre" type="text" required value="<?=$nombreProfesor?>"></label>
    <label for="apellido">Apellido<input class="border_input" name="apellido" type="text" value="<?=$apellidoProfesor?>"required></label>
    <label for="edad">Edad<input class="border_input" name="edad" type="number" value="<?=$edadProfesor?>" required></label>
    <input type="submit">
    <div class="fase">
        <div class="Estas"></div>
        <div class="NoEstas"></div>
        <div class="NoEstas"></div>
    </div>
</form>

<?php include 'partials/footer.view.php'; ?>