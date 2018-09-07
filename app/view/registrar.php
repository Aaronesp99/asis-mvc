<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
</head>
<body>
    <form method="POST" action="../ajax/registrar_practicante.php">
        <input type="text" name="dni" placeholder="DNI">
        <input type="text" name="apePaterno" placeholder="Apellido Paterno">
        <input type="text" name="apeMaterno" placeholder="Apellido Materno">
        <input type="text" name="nombres" placeholder="Nombres"><br>
        <input type="text" name="fecnac" placeholder="Fecha Nacimiento">
        <input type="text" name="sexo" placeholder="Sexo">
        <input type="text" name="turno" placeholder="Turno">
        <input type="text" name="descripcion" placeholder="Descripción">
        <input type="submit">
        
    </form>
</body>
</html>