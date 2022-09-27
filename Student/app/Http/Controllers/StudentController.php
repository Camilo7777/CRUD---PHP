<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['students'] = Student::paginate(15); 
        return view('student.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosStudent = request()->all();
        $datosStudent = request()->except('_token');
        switch($datosStudent['Tipo_Licencia']){
            case "B1":
                $datosStudent['Descripcion'] = "Carros Particulares";
                $datosStudent['Precio'] = 368000 + 400000;
                    break;
            case "B2":
                $datosStudent['Descripcion'] = "Buses, Camiones y Particulares";
                $datosStudent['Precio'] = 516000 + 400000;
                    break;
            case "C1":
                $datosStudent['Descripcion'] = "Taxis";
                $datosStudent['Precio'] = 442000 + 400000;
                break;
            case "C2":
                $datosStudent['Descripcion'] = "Buses y Camiones Publicos";
                $datosStudent['Precio'] = 890000 + 400000;
                    break;
            default:
                    break;
    }      
         Student::insert($datosStudent);
         return redirect('student')->with('mensaje','Estudiante agregado con exito');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::findOrFail($id) ;
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosStudent = request()->except(['_token','_method']);
        switch($datosStudent['Tipo_Licencia']){
            case "B1":
                $datosStudent['Descripcion'] = "Carros Particulares";
                $datosStudent['Precio'] = 368000 + 400000;
                    break;
            case "B2":
                $datosStudent['Descripcion'] = "Buses, Camiones y Particulares";
                $datosStudent['Precio'] = 516000 + 400000;
                    break;
            case "C1":
                $datosStudent['Descripcion'] = "Taxis";
                $datosStudent['Precio'] = 442000 + 400000;
                break;
            case "C2":
                $datosStudent['Descripcion'] = "Buses y Camiones Publicos";
                $datosStudent['Precio'] = 890000 + 400000;
                    break;
            default:
                    break;
    }      
        Student::where('id','=',$id)->update($datosStudent);

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Student::destroy($id);
     
        return redirect('student')->with('mensaje','Estudiante borrado  ');
    }
}
