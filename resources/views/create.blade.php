<form action="{{ url('vehiculo') }}" method="post">
    @csrf
    <input type="text" name="modelo" placeholder="Modelo"/>
    <br>
    <!--<input type="text" name="idfabricante" placeholder="ID del fabricante"/>-->
    <br>
    <select name="idfabricante">
        @foreach ($fabricantes as $fabricante)
            <option value="{{ $fabricante->id }}">{{ $fabricante->nombre . ' ' . $fabricante->pais }}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="Submit"/>
</form>