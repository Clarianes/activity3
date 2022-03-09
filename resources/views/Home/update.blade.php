@extends('layouts.mainlayout')

@section('title', 'Update Page')

@section('content')
    <h1 class="w3-center"><b>Successfully Update</b></h1>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <div>
        <h1><b>Last Name: </b>{{ $update['lastname'] }}</h1>
        <h1><b>First Name: </b>{{ $update['firstname'] }}</h1>
        <h1><b>Birthday: </b>{{ $update['birthday'] }}</h1>
        @if ($update['isnewstudent'] == 'true')
            <h1><b>Status: </b>New Student</h1>
        @else
            <h1><b>Status: </b>Old Student</h1>
        @endif
    </div>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <a class="w3-button w3-red w3-hover-pale-red w3-padding w3-round" href="/home">Back</a>
@endsection
