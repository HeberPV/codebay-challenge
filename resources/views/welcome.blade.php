<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CodeBay-Challenge</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="tablediv">
            <table id="tablePer">
                <caption>Personas registradas</caption>
                <thead>
                    <tr id="trhead">
                        <td>Id</td>
                        <td class="middletd">Nombre completo</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                    <tr>
                        <td>{{$persona -> id}}</td>
                        <td class="middletd">{{$persona -> nombre}} {{$persona -> apellidoP}} {{$persona -> apellidoM}} </td>
                        <td id="actions">
                            <a href="{{ route('personas.edit',$persona -> id) }}" class="btnimg"><img src="https://cdn-icons-png.flaticon.com/512/3094/3094179.png" alt="editar"></a>
                            <form action="{{ route('personas.destroy',$persona -> id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" id="btnactions"><a href="#" class="btnimg"><img src="https://cdn-icons-png.flaticon.com/512/458/458594.png" alt="eliminar"></a></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('personas.create') }}" class="btn">Agregar persona</a>
        </div>
    </body>
</html>
