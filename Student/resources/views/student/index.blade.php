<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <table  class="table table-sm table-striped table table-bordered">
            <h3 class="he" >Datos Licencia Estudiante</h3>
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Tipo de sangre</th>
                    <th>Direccion</th>
                    <th>Tipo de licencia</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th colspan="2">Acciones</th>
        
                </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->Documento }}</td>
                    <td>{{ $student->Nombre }}</td>
                    <td>{{ $student->Tipo_Sangre }}</td>
                    <td>{{ $student->Direccion }}</td>
                    <td>{{ $student->Tipo_Licencia }}</td>
                    <td>{{ $student->Descripcion }}</td>
                    <td>{{ $student->Precio }}</td>
                    <td>
                    
          
                        <form action="{{ url('/student/'.$student->id) }}" method="post">
                         @csrf
                         {{ method_field('DELETE') }}
                          <input  class="btn btn-danger" type="submit" onclick="return confirm('Esta segur@ de lo que va a hacer? ?')" 
                          value="Borrar">  
           
                        </form>
                           
                    </td>
                    <td>
                        <button  type="submit" name="editStudent" class="btn btn-outline-success" onclick="location.href='{{url  ('/student/'.$student->id.'/edit') }}'">Editar</button>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" name="editStudent" class="btn btn-outline-primary" onclick="location.href='{{ url('student/create') }}'">Nuevo Estudiante</button>
       

    </div>
    
</body>
</html>



