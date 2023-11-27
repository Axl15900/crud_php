Formulario de creacion de empleados

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('Empleado.form')
</form>