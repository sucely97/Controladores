<h1>Registrarse</h1>

<form action="index.php?controller=usuario&action=save" method="POST">

    <label for="nombre"> Nombre </label>
    <input type="text" name="nombre" required/>

    <label for="Apellidos"> Apellidos </label>
    <input type="text" name="apellidos" required/>

    <label for="email"> email </label>
    <input type="text" name="email" required/>

    <label for="password"> Contraseña </label>
    <input type="text" name="password" required/>

    <input type="submit" value="Registrarse" />

</form>
