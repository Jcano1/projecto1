<?php
require MODS.'/formularioClase.php';
if(!empty($_POST)        
&& !empty($_POST['Nombre']) 
&& !empty($_POST['apellido']) 
&& !empty($_POST['edad'])){
$_SESSION['nombreProfesor'] = $_POST['Nombre'];
$_SESSION['apellidoProfesor'] = $_POST['apellido'];
$_SESSION['edadProfesor'] = $_POST['edad'];
}

require VIEWS.'/formularioClase.view.php';