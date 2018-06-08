<center>
<h2>Tipo de vivienda</h2>
<form action="/vivienda/agregar" method="post">
    {!! csrf_field() !!}
    <h4>Tipo</h4>
    <select class="selectpicker" name="tipo_id">
        <option value="1">Chalet</option>
    </select>
    <h4>Cantidad de ambientes</h4>
    <select class="selectpicker" name="cant_ambientes">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6 o mas</option>
    </select>
    <h4>Cantidad de Banos</h4>
    <select class="selectpicker" name="cant_banos">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4 o mas</option>
    </select>
    <h4>Patio</h4>
    <select class="selectpicker" name="patio">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <h4>Garage</h4>
    <select class="selectpicker" name="garage">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <br><br><br>
    <input type="submit" value="OK" />
</form>
</center>


