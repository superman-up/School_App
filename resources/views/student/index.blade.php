@extends('layouts.app')
@section('main')
    <div class="container">
        
        <div class="mt-2 text-end">
            <a class="btn btn-primary btn-sm h2" href="{{route("student.create")}}">New Student</a>
        </div>
        <div class="row mt-2">
            <table class="table table-dark table-hover">                
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Class</th>
                        <th scope="col">Marks %</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                        <img src="students/{{$student->Image}}" class="rounded-circle" width="40" height="40" alt="">
                        </td>
                        <td><a class="text-white" href="{{route("student.show",$student->id)}}">{{$student->Student_Name}}</a></td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->Class}}</td>
                        <td>{{$student->Marks}}%</td>                        
                        <td>
                        <a class="btn btn-primary btn-sm" href="{{route("student.edit",$student->id)}}">Edit</a>
                        <form class="d-inline" action="{{route("student.delete",$student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$students->links()}}
        </div>
        <div class="img2">
            <img class="img " src="images/third.png">
       </div>
    </div>
@endsection