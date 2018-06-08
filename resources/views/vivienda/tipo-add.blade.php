
<h2>Tipo de vivienda</h2>
<form action="/tipo-vivienda/agregar" method="post">
    {!! csrf_field() !!}
    <h4>Nombre</h4>
    <input name="nombre" />

    <input type="submit" value="OK" />
</form>