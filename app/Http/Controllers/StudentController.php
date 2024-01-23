<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    public function index(){
        $students = student::latest()->paginate(5);
        
        return view("student.index",["students"=>$students]);
    }
    public function show(string $id){
        $student = student::where('id',$id)->first();
        return view("student.show",["student"=>$student]);
    }

    public function create(){
        return view("student.create");
    }
    public function store(Request $request){
        //vaildation
        
       $validator = Validator::make($request->all(),[
            "name"=> "required",
            "fname"=> "required",
            "dob"=>"required",
            "address"=>"required",
            "city"=>"required",
            "state"=>"required",
            "pin"=>"required",
            "phone"=>"required|unique:students",
            "email"=>"required|email|unique:students",
            "class"=>"required",
            "marks"=>"required|max:3",
            "image"=>"required|mimes:jpeg,jpg,png,gif|max:150000"

        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
        //image upload
        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path("students"),$imageName);

        $student = new student;            
        $student->Student_Name = $request->name;
        $student->Father_Name = $request->fname;
        $student->DOB = $request->dob;
        $student->Address = $request->address;
        $student->City = $request->city;
        $student->State = $request->state;
        $student->Pin = $request->pin;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->Class = $request->class;
        $student->Marks = $request->marks;
        $student->Image = $imageName;
        $save= $student->save();
        }
        if($save){
            return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
        }
        //return redirect()->route("student.index");           
        
    }
    public function edit(string $id){
        $student = student::where('id',$id)->first();
        return view("student.update",["student"=>$student]);

    }
    public function update(Request $request, string $id){
        //vaildation
        $request->validate([
            "name"=> "required",
            "fname"=> "required",
            "dob"=>"required",
            "address"=>"required",
            "city"=>"required",
            "state"=>"required",
            "pin"=>"required",
            "phone"=>"required|min:10|max:12",
            "email"=>"required|email|",
            "class"=>"required",
            "marks"=>"required",
            "image"=>"nullable|mimes:jpeg,jpg,png,gif|max:150000"

        ]);

        //image upload
        $student = student::where('id',$id)->first();
        if(isset($request->image)){
            $imageName = time().".".$request->image->extension();
            $request->image->move(public_path("students"),$imageName);
            $student->Image = $imageName;

        }                   
        $student->Student_Name = $request->name;
        $student->Father_Name = $request->fname;
        $student->DOB = $request->dob;
        $student->Address = $request->address;
        $student->City = $request->city;
        $student->State = $request->state;
        $student->Pin = $request->pin;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->Class = $request->class;
        $student->Marks = $request->marks;
        $student->save();
        return redirect()->route("student.index");       
    }
    public function destroy(string $id){
        $student = student::where('id',$id)->first();
        $student->delete();
        return redirect()->route("student.index");
    }

}