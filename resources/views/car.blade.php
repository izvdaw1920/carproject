<table border="1">
    @foreach ($vehiculos as $vehiculo)
        <tr>
            <td>{{$vehiculo->id}}</td>
            <td>{{$vehiculo->modelo}}</td>
            <td>{{$vehiculo->idfabricante}}</td>
            <td>{{$vehiculo->fabricante->id}}</td>
            <td>{{$vehiculo->fabricante->nombre}}</td>
            <td>{{$vehiculo->fabricante->pais}}</td>
        </tr>
    @endforeach
</table>
<a href="{{ url('vehiculo/create') }}">Agregar vehiculo</a>