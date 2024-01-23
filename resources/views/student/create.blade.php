@extends('layouts.app')
@section('main') 
      <div class="container" >
        <img class="img " src="images/second.png">
        
        <div class="row d-flex justify-content-center" >
            
            <div class="col-sm-8 mt-3"> 
                <div class="text-center p-1 rounded bg-dark ">
                    <h3><span class="text-white">Student Enrollment Form</span></h3>
                </div>
                <div class="card mt-1 p-4">
                    <form action="{{route("student.store")}}" method="POST" id="main_form" enctype="multipart/form-data">
                    @csrf                
                   <div class="row justify-content-center align-items-center">    
                     <div class="form-group col-sm-6">
                        <label for="" class="">Student Name</label>
                        <input type="text" value="{{old("name")}}" name="name" id="" placeholder="Enter Student Name..." class="form-control @error('name')is-invalid @enderror">                        
                        <span class="text-danger error-text name_error"></span>
                        {{-- @if($errors->has('name'))                    
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif                 --}}
                   </div>
                    
                    <div class="form-group col-sm-6 ">
                        <label for="">Father's Name</label>
                        <input type="text" name="fname" id="" value="{{old("fname")}}" placeholder="Enter Father's Name Here..." class="form-control @error("fname") is-invalid @enderror">
                        <span class="text-danger error-text fname_error"></span>
                        {{-- @if($errors->has('fname'))                    
                        <span class="text-danger">{{$errors->first('fname')}}</span>
                        @endif --}}
                    </div>
                   
                   
                    <div class="form-group col-sm-6 mt-2 ">
                        <label for="">Student DOB</label>
                        <input type="date" name="dob" id="" value="{{old("dob")}}" class="form-control @error('dob') is-invalid @enderror">
                        <span class="text-danger error-text dob_error"></span>
                         
                    </div>
                    <div class="form-group col-sm-6 mt-2">
                        <label for="">Address</label>
                        <textarea name="address" id="" rows="1" value="" class="form-control @error("address") is-invalid @enderror">{{old("address")}}</textarea> 
                        <span class="text-danger error-text address_error"></span>
                         
                    </div>
                    <div class="form-group col-sm-4 mt-2">
                        <label for="">City</label>
                        <input type="text" name="city" id="" value="{{old("city")}}" class="form-control @error("city") is-invalid @enderror">
                        <span class="text-danger error-text city_error"></span>
                        
                    </div>
                    <div class="form-group col-sm-4 mt-2 ">
                        <label for="">State</label>
                        <input type="text" name="state" id="" value="{{old("state")}}" class="form-control @error("state") is-invalid @enderror">
                        <span class="text-danger error-text state_error"></span>
                        
                    </div>
                    <div class="form-group col-sm-4 mt-2">
                        <label for="">Pin Code</label>
                        <input type="text" name="pin" id="" value="{{old("pin")}}" class="form-control @error("pin") is-invalid @enderror">
                        <span class="text-danger error-text pin_error"></span>
                        
                    </div>                     
                    
                    <div class="form-group col-sm-6 mt-2">
                        <label for="">Phone No.</label>
                        <input type="text" name="phone" id="" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror">
                        <span class="text-danger error-text phone_error"></span>
                         
                    </div>
                    <div class="form-group col-sm-6 mt-2">
                        <label for="">Email</label>
                        
                        <input type="text" name="email" id="" value="{{old("email")}}" class="form-control @error("email") is-invalid @enderror">
                        <span class="text-danger error-text email_error"></span>

                    </div>
                    <div class="form-group col-sm-4 mt-2">
                        <label for="">Class</label>
                        <select class="form-control @error("class") is-invalid @enderror" aria-label="Default select example" name="class">                            
                            <option value="{{old('class')}}1">5th class</option>
                            <option value="{{old('class')}}2">6th class</option>
                            <option value="{{old('class')}}3">7th class</option>
                            </select>
                        <span class="text-danger error-text class_error"></span>

                    </div>
                     <div class="form-group col-sm-4 mt-2">
                        <label for="">Marks %</label>
                        <input type="text" name="marks" id="" value="{{old("marks")}}" class="form-control @error("marks") is-invalid @enderror">
                        <span class="text-danger error-text marks_error"></span>
                        
                    </div>
                    
                    <div class="form-group col-sm-4 mt-2">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" value="{{old("image")}}" class="form-control @error("image") is-invalid @enderror">
                        <span class="text-danger error-text file_error"></span>
                        
                    </div>
                     <div class="form-group">                        
                        <input type="submit" name="submit" id="" class="btn btn-primary mt-3">
                        <a href="{{route("student.index")}}" class="btn btn-danger mt-3">Back</a>
                    </div>
                </form>
               
                </div>       
                
            </div>
        </div>
        <div class="img2">
             <img class="img " src="images/first.png">
        </div>
    </div>
    
    
@endsection