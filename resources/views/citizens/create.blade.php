@extends('layouts.adminLayout')

@section('content')
    <div class="container">
            <h3 class="text-center">Add New Citizen</h3>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form method="POST" action="/citizens/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name">
                        @error('full_name')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address">
                        @error('address')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="male" name="gender" value="M" class="custom-control-input" />
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="female" name="gender" value="F" class="custom-control-input" />
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="ward">Ward</label>
                        <input type="text" name="ward" class="form-control" id="ward">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection