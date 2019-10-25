<table border="1">
    @foreach ($vehiculos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->modelo}}</td>
            <td>{{$producto->idfabricante}}</td>
            <td>{{$producto->fabricante->id}}</td>
            <td>{{$producto->fabricante->nombre}}</td>
            <td>{{$producto->fabricante->pais}}</td>
        </tr>
    @endforeach
</table>