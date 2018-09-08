<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="public/assets/js/registrar.js"></script>
    <link rel="stylesheet" href="public/assets/css/registrar.css">

</head>
<body>

    <form method="POST" id="frm1">
        <h2>Registro de Practicante</h2>
        <input type="text" name="dni" placeholder="DNI" class="input">
        <input type="text" name="apePaterno" placeholder="Apellido Paterno" class="input">
        <input type="text" name="apeMaterno" placeholder="Apellido Materno" class="input">
        <input type="text" name="nombres" placeholder="Nombres" class="input">
        <input type="text" name="fecnac" placeholder="Fecha Nacimiento" class="input">
        <input type="text" name="sexo" placeholder="Sexo" class="input">
        <input type="text" name="turno" placeholder="Turno" class="input">
        <!-- <select>
        <option selected>Escoge Turno</option>
        <option value="T1">Turno Mañana</option>
        <option value="T2">Turno Tarde</option>
        <select> -->
        <input type="text" name="descripcion" placeholder="Descripción" class="input">
        <input type="submit" id="btn-sub" class="input">
        
    </form>
</body>
</html>