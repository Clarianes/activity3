@extends('layouts.mainlayout')

@section('title', 'Create Page')

@section('content')
    <h1 class="w3-center"><b>Create New Student</b></h1>
    <hr style="height:2px; border-width:0; color:black; background-color:black">
    <form action="/home" method="post">
        @csrf
        <h1>Student Number: </h1> <input class="w3-input w3-border w3-round" type="text" name="studentnumber"
            id="studentnumber">
        <h1>Last Name: </h1> <input class="w3-input w3-border w3-round" type="text" name="lastname" id="lastname">
        <h1>First Name: </h1> <input class="w3-input w3-border w3-round" type="text" name="firstname" id="firstname">
        <h1>Birthday: </h1> <input type="date" id="birthday" name="birthday">
        <h1>New Student: </h1>
        <h2><input class="w3-radio" type="radio" name="isnewstudent" value="true"><label>Yes</label></h2>
        <h2><input class="w3-radio" type="radio" name="isnewstudent" value="false"><label>No</label></h2>
        <div class="w3-display-container w3-margin-bottom">
            <a class="w3-button w3-red w3-hover-pale-red w3-padding w3-round" href="/home">Back</a>
            <input class="w3-button w3-display-right w3-round w3-teal w3-hover-light-blue w3-display-right" type="submit"
                value="Submit" />
        </div>
    </form>
@endsection
