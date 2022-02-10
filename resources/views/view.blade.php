@extends('layouts.app')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    @if(count($infos ?? '')<1) <h1>No values. Add some.</h1>
                        @else
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Nationality</th>
                                <th>DOB</th>
                                <th>Faculty</th>
                                <th>Module</th>
                            </tr>
                            @foreach($infos as $info)
                            <tr>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->gender }}</td>
                                <td>{{ $info->email }}</td>
                                <td>{{ $info->phone }}</td>
                                <td>{{ $info->address }}</td>
                                <td>{{ $info->nationality }}</td>
                                <td>{{ $info->dob }}</td>
                                <td>{{ $info->faculty }}</td>
                                <td>{{ $info->module }}</td>
                            </tr>
                            @endforeach
                            
                        </table>
                        <div>
                        {{$infos->links()}}
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection