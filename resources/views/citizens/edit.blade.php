@extends('layouts.adminLayout')

@section('content')
    <div class="container">
            <h3 class="text-center">Edit Citizen</h3>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form method="POST" action={{url('citizens/' . $citizen->id)}} enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="full_name" value='{{$citizen->full_name}}'>
                        @error('name')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="address" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value='{{$citizen->address}}'>
                        @error('address')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" {{($citizen->gender == 'M')? "checked" : ""}} id="male" name="gender" value="M" class="custom-control-input" />
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" {{($citizen->gender == 'F')? "checked" : ""}} id="female" name="gender" value="F" class="custom-control-input" />
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone" value='{{$citizen->phone}}'>
                    </div>
                    <div class="form-group">
                        <label for="ward">Ward</label>
                        <input type="text" name="ward" class="form-control" id="ward" value='{{$citizen->ward}}'>
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection