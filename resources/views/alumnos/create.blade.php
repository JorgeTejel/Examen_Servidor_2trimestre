@extends("layout")
@section("contenido")
    </fieldset>
<form action="{{route("alumnos.store")}}" method="post">
    @csrf
    @method('post')
    Nombre <input type="text" name="nombre" id=""><br>
    Apellido <input type="text" name="apellido" id=""><br>
    DNI <input type="text" name="dni" id=""><br>
    <input type="submit" value="Guardar">
</form>
</fieldset>
@endsection
