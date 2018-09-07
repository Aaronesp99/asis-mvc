<?php
require_once 'app/model/Practicante.php';
$obj=new Practicante();
$obj->registrarPracticante();
require_once 'app/view/registrar.php';