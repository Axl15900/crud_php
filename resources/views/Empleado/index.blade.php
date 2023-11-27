Mostrar lista de empleados

<a href="{{url('empleado/create')}}">Registrar nuevo empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellidos }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">Editar</a> 
                
                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Borrar" onclick="return confirm('deseas borar?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>