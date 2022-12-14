<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    
    }
    public function view()
    {
        $students = Student::all();
        return response()->json([
            'students'=>$students,
        ]);
    
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:191',
            'email'=>'required|max:191',
            'phone'=>'required|max:191',
            'course'=>'required|max:191',
        ]);
        if(($validator)->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $student  = new Student;
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->phone = $request->input('phone');
            $student->course = $request->input('course');
            $student->save();

            return response()->json([
                'status'=>200,
                'message'=>'Student Added Successfully',
            ]);
        }
    
    }
}
