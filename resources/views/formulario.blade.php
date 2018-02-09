<html>

<body>

<form method="post" action="comprobarEdad">
{{ csrf_field() }}
    Nombre: <input name="name"/>
    Edad: <input name="edad"/>

    <button type="submit">Enviar</button>

</form>

</body>


</html>