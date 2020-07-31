@extends('layouts.app')

@section('content')
<div class="home-wrapper">
    <div class="title m-b-md">
        Menu
    </div>
    <div class="menu-item-wrapper" >
        <a class="menuItem" href="{{ route('notes.create') }}">Create New Note</a>

        <a class="menuItem" href="{{ route('notes.index') }}">View My Note</a>

        <!-- <a class="menuItem" href="">Edit Account</a> -->

    </div>
</div>
@endsection
