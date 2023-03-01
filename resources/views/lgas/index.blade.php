@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">State</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($lgas as $lga)
                <tr style="backgroundColor:#fff">
                    <td>{{$ward->name}}</td>
                    <td>{{$ward->state_id}}</td>
                </tr>
            @empty
                <div class="display-3 text-center">No Lgas Available</div>
            @endforelse
            </tbody>
        </table>
        
    </div>
        {{ $lgas->links() }}
    </div>
@endsection