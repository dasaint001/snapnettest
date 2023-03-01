@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Ward</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($citizens as $citizen)
                <tr style="backgroundColor:#fff">
                    <td>{{$citizen->full_name}}</td>
                    <td>{{$citizen->address}}</td>
                    <td>{{$citizen->gender}}</td>
                    <td>{{$citizen->phone}}</td>
                    <td>{{($citizen->ward_id)? $citizen->country : 'empty'}}</td>
                    <td>{{$citizen->created_at}}</td>
                    <td>{{$citizen->updated_at}}</td>  
                    <td class="justify-content-center"> 
                        <a href={{"citizens/".$citizen->id}} class="btn btn-info btn-sm text-light">View</a>
                        <a href={{"citizens/edit/".$citizen->id}} class="btn btn-success btn-sm text-light">Edit</a>
                        <form action="{{url('citizens/'.$citizen->id)}}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <div class="display-3 text-center">No Citizens Available</div>
            @endforelse
            </tbody>
        </table>
        
    </div>
        {{ $citizens->links() }}
    </div>
@endsection