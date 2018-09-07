<?php
if(isset($_GET['url'])){
    $view=$_GET['url'];
    switch ($view) {
        case 'home': 
        include './app/view/home.php';
        break;
        default:
        echo "ERROR 404";
        case 'detalle':
        include './app/view/detalle_asistencia.php';
        break;
        case 'registro';
        include './app/view/registrar.php';
        break;
    }
}else{
   echo "<a href='./home'>home</a><br>";
   echo "<a href='./detalle'>detalle</a><br>";
   echo "<a href='./registro'>registro</a>";
}
