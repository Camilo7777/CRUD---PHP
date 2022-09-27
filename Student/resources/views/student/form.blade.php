<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="container mt-5 p-0">
    <h1 class="text-center"> {{ $modo }} empleado </h1>
    <div class="form-group m-5 p-0">
    <input class="form-control" type="number" name="Documento" value="{{isset($student->Documento)?$student->Documento:'' }}" placeholder="Numero de Documento" required  maxlength="10">
    </div>
    
    <div class="form-group m-5 p-0">
    <input class="form-control" type="text" name="Nombre" value="{{ isset($student->Nombre)?$student->Nombre:'' }}" placeholder="Nombre Completo" required  maxlength="50">
    </div>
    
    <div class="form-group m-5 p-0">
    <select class="form-select"       name="Tipo_Sangre" value="{{ isset($student->Tipo_Sangre)?$student->Tipo_Sangre:'' }}" required>
        <option value="">Seleccione Grupo Sanguineo</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
    </div>
    
    <div class="form-group m-5 p-0">
    <input class="form-control" type="text" name="Direccion" value="{{ isset($student->Direccion)?$student->Direccion:'' }}" placeholder="Direccion" required  maxlength="50">
    </div>
    
    <div class="form-group m-5 p-0">
    <select class="form-select" name="Tipo_Licencia" value="{{ isset($student->Tipo_Licencia)?$student->Tipo_Licencia:'' }}" required> 
        <option value="">Tipo Licencia</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
    </select>
    </div>
    
    <input class="btn btn-outline-info" type="submit" value="{{ $modo }} datos">
    
    <b>
        <button type="submit" name="regresar" class="btn btn-outline-primary" onclick="location.href='{{ url('student') }}'">Regresar</button>    
</div>  
</body>
</html>



