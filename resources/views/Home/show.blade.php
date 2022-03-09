@extends('layouts.mainlayout')

@section('title', 'Show Page')

@section('content')
    <h1 class="w3-center"><b>Student Details</b></h1>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <div>
        <h1><b>Last Name: </b>{{ $show['lastname'] }}</h1>
        <h1><b>First Name: </b>{{ $show['firstname'] }}</h1>
        <h1><b>Birthday: </b>{{ $show['birthday'] }}</h1>
        @if ($show['isnewstudent'] == true)
            <h1><b>Status: </b>New Student</h1></b>
        @else
            <h1><b>Status: </b>Old Student</h1></b>
        @endif
    </div>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <a class="w3-button w3-red w3-hover-pale-red w3-padding w3-round" href="/home">Back</a>
@endsection
