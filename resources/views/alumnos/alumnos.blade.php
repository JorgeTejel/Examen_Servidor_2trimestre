@extends("layout")
@section("contenido")
    <a href="{{route("alumnos.create")}}">Nuevo Alumno</a>
    <table class="table-auto border-separate">
        <caption>Listado de alumnos</caption>
        <tr class="border">
            <th class="border-2">Nombre</th>
            <th class="border-2">Apellido</th>
            <th class="border-2">DNI</th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr class="border">
                <td class="border">{{$alumno->nombre}}</td>
                <td class="border">{{$alumno->apellido}}</td>
                <td class="border">{{$alumno->dni}}</td>
                <td class="border">
                    <form action="{{route("alumnos.destroy", $alumno->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Borrar">
                    </form>
                </td>
                <td class="border">
                    <a href="{{route("alumnos.edit", $alumno->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
