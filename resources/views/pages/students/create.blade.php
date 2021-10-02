@extends('layout.app')
@section('content')
<form action="{{ (route('student.submit')) }}" class="col-md-6" method="post">
    {{ csrf_field() }}

    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Name:</span>
            <input type="text" class="form-control" value="{{ old('name') }}" name="name"  >
            @error('name')
            <span class="text-danger">{{ $message }}</span>
                
            @enderror
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">ID:</span>
            <input type="text" value="{{ old('id') }}" class="form-control" name="id"   >
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Dob:</span>
            <input type="date" class="form-control" name="dob" >
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Email:</span>
            <input type="text" class="form-control" name="email"  >
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Phone:</span>
            <input type="text" class="form-control" name="phone"  >
            
          </div>

    </div>
    <input type="submit" class="btn btn-danger" value="Add">
</form>
@endsection