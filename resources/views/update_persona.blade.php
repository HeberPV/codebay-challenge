<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar persona</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="tablediv">
    <a href="{{ route('personas.index') }}" class="btn">Regresar</a>
        <form action="{{ route('personas.update',$persona -> id) }}" method="POST" id="formulario">
        <h1>Agregar nueva persona</h1>
        @csrf
        {{ method_field('PUT') }}
            <div class="formularioRow">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="{{$persona -> nombre}}">
            </div>
            <div class="formularioRow">
                <label for="apellidoP">Apellido Paterno:</label>
                <input type="text" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" value="{{$persona -> apellidoP}}">
            </div>
            <div class="formularioRow"> 
                <label for="apellidoM">Apellido Materno:</label>
                <input type="text" id="apellidoM" name="apellidoM" placeholder="Apellido Materno" value="{{$persona -> apellidoM}}">
            </div>
            <button type="submit" id="btnform">Guardar</button>
        </form>
    </div>
    
</body>
</html>