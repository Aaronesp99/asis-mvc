<?php
require_once '../app/model/Cn.php';
require_once '../app/model/Practicante.php';

$obj= new Practicante($_POST['dni'],
$_POST['apePaterno'],
$_POST['apeMaterno'],
$_POST['nombres'],
$_POST['fecnac'],
$_POST['sexo'],
$_POST['turno'],
$_POST['descripcion']);

$rs=$obj->registrarPracticante();
echo $rs;