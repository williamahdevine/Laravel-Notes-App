@extends('layouts.app')

@section('content')
<div class="welcome-wrapper">
    <div class="title m-b-md">
        My Notes
    </div>
    <div class="welcomNav" >
        <a class="welcomeBTN" href="/register">Register</a>

        <small>Already have an account?</small>
        
        <a class="welcomeBTN" href="/login">Login</a>
    </div>
</div>
@endsection

