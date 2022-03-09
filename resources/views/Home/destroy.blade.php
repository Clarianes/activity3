@extends('layouts.mainlayout')

@section('title', 'Delete Page')

@section('content')
    <h1 class="w3-center"><b>Are you sure you want to delete this student?</b></h1>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <div>
        <h1><b>Last Name: </b>{{ $destroy['lastname'] }}</h1>
        <h1><b>First Name: </b>{{ $destroy['firstname'] }}</h1>
        <h1><b>Birthday: </b>{{ $destroy['birthday'] }}</h1>
        @if ($destroy['isnewstudent'] == true)
            <h1><b>Status: </b>New Student</h1></b>
        @else
            <h1><b>Status: </b>Old Student</h1></b>
        @endif
    </div>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <div class="w3-display-container">
        <a class="w3-button w3-teal w3-hover-light-blue w3-padding w3-round" href="/home">No</a>
        <a class="w3-button w3-red w3-hover-pale-red w3-padding w3-round w3-display-right" href="/home">Yes</a>
    </div>
@endsection
