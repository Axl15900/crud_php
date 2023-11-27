Formulario de edicion de empleados

<form action="{{url('/empleado/'.$empleado->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('Empleado.form')

</form>

