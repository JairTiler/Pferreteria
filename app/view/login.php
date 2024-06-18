<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="public/sttylo1.css">
    <title>Document</title>
</head>
<body>
<h1>Iniciar Sesion</h1>   
    <form   method="POST" action="index.php?action=logiar"  >
      
        <input type="email" name="usuario" placeholder="correo" required>
        <br/>
        <br/>
        <input type="password" name="contrasenia" placeholder="contraseña" required>
        <br/>
        <br/>
        <button type="submit">Iniciar Session</button>
        <br/>
        <a href="registrar.php">Crear usuario</a>  

    </form>


    
</body>
</html>



