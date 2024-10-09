<?php include 'partials/header.view.php'; ?>
<h3>formulario de Clase</h3>
<form action="formularioAlumnos" class="formulario" method="post">
    <label for="Nombre">Nombre <input class="border_input" name="Nombre" type="text" required></label>
    <label for="apellido">Apellido<input class="border_input" name="apellido" type="text" required></label>
    <label for="clase">clase<input class="border_input" name="clase" type="text" required></label>
    <input type="submit">
    <div class="fase">
        <a href="formularioProfesores" class="NoEstas"><div class="NoEstas"></div></a>
        <div class="Estas"></div>
        <div class="NoEstas"></div>
    </div>
</form>

<?php include 'partials/footer.view.php'; ?>