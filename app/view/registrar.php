<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="POST" action="">
        <select name="combo">
            <option value="Cédula Ciudadania">Cédula Ciudadania</option>
            <option value="TI">Tarjeta Identidad</option>
        </select>
       <input type="text" name="nombre" required placeholder="Nombre">
       <br><br>
       <input type="email" name="correo" require placeholder="Correo">
       <br><br>
       <input type="password" name="contrasena" require placeholder="Contraseña">
       
       <button type="submit">Registrarse</button>
    </form>
</body>
</html>