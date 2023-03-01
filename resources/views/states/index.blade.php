@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($states as $state)
                <tr style="backgroundColor:#fff">
                    <td>{{$state->name}}</td>
                </tr>
            @empty
                <div class="display-3 text-center">No States Available</div>
            @endforelse
            </tbody>
        </table>
        
    </div>
        {{ $states->links() }}
    </div>
@endsection