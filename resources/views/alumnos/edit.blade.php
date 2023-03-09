@extends("layout")
@section("contenido")
    </fieldset>
<form action="{{route("alumnos.update", $alumno->id)}}" method="post">
    @csrf
    @method('put')
    Nombre <input type="text" name="nombre" id="" value="{{$alumno->nombre}}"><br>
    Apellido <input type="text" name="apellido" id="" value="{{$alumno->apellido}}"><br>
    DNI <input type="text" name="dni" id="" value="{{$alumno->dni}}"><br>
    <input type="submit" value="Guardar">
</form>
</fieldset>
@endsection
