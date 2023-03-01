@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Lga</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($wards as $ward)
                <tr style="backgroundColor:#fff">
                    <td>{{$ward->name}}</td>
                    <td>{{$ward->lga_id}}</td>
                </tr>
            @empty
                <div class="display-3 text-center">No Wards Available</div>
            @endforelse
            </tbody>
        </table>
        
    </div>
        {{ $wards->links() }}
    </div>
@endsection