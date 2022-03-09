@extends('layouts.mainlayout')

@section('title', 'Index Page')

@section('content')
    <div class="w3-display-container">
        <h1><b>List of Students</b></h1>
        <a class="w3-button w3-teal w3-hover-light-blue w3-padding w3-round w3-display-right" href="/home/create">Create</a>
    </div>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <table class="w3-table-all w3-centered">
        <tr class="w3-teal">
            <th>Student Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Birthday</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @forelse ($showall as $key => $array)
            <tr class="w3-hover-pale-blue">
                <td>
                    <p>{{ $key }}</p>
                </td>
                <td>
                    <p>{{ $array['lastname'] }}</p>
                </td>
                <td>
                    <p>{{ $array['firstname'] }}</p>
                </td>
                <td>
                    <p>{{ $array['birthday'] }}</p>
                </td>
                <td>
                    @if ($array['isnewstudent'] == true)
                        <p>New Student</p>
                    @else
                        <p>Old Student</p>
                    @endif
                </td>
                <td>
                    <a class="w3-button w3-green w3-hover-light-green w3-padding w3-round"
                        href="/home/{{ $key }}">Show</a>
                    <a class="w3-button w3-deep-orange w3-hover-orange w3-padding w3-round"
                        href="/home/{{ $key }}/edit">Edit</a>
                    <a class="w3-button w3-red w3-hover-pale-red w3-padding w3-round"
                        href="/home/{{ $key }}/destroy">Delete</a>
                </td>
            </tr>
        @empty
            <h1>No Students</h1>
        @endforelse
    </table>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
@endsection
