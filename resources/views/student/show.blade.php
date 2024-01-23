@extends("layouts.app")
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <span><img src="/students/{{ $student->Image}}" alt="" width= "150px " height="150px" class=" rounded-circle border border-warning border-2 float-end"></span>
                <p>Name : <b>{{$student->Student_Name}}</b></p>
                <p>Father's Name : <b>{{$student->Father_Name}}</b></p>
                <p>Address : <b>{{$student->Address}}</b></p>
                <p>DOB : <b>{{$student->DOB}}</b></p>
                <p>Class : <b>{{$student->Class}}</b></p>
                <p>Phone : <b>{{$student->phone}}</b></p>
                <p>Email address : <b>{{$student->email}}</b></p>
                <p>Marks : <b>{{$student->Marks}}</b></p>
            </div>

        </
    </div>
</div>
@endsection