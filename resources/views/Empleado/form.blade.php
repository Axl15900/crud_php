<input type="text" name="Nombre" placeholder="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}">
<br>
<input type="text" name="Apellidos" placeholder="Apellidos" id="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:''}}">
<br>
<input type="text" name="Correo" placeholder="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:''}}">
<br>
<input type="submit" value="Enviar">


<a href="{{url('empleado')}}">Regresar</a>