@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <a class="btn btn-secondary" href="/users">Go Back</a>
    <h3 class="text-center">{{$citizen->name}}</h3>
    <div class="row">
        <div class="offset-md-2 col-md-8 mt-3 user-info">

            <p><strong>Address: </strong> {{$citizen->email}}</p> 
            <p><strong>Gender: </strong> {{$citizen->gender}}</p> 
            <p><strong>Phone Number: </strong> {{$citizen->phone}}</p> 
            <p><strong>Ward: </strong> {{$citizen->ward_id}}</p> 
        </div>
    </div>
</div>
@endsection