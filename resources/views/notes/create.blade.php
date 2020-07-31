@extends('layouts.app')

@section('content')
<div class="wrapper create-notes">
    <h1>Create a New Note</h1>
    <form action="/notes" method="POST">
        @csrf
        <label for="name">Note Name: </label>
        <input type="text" id="name" name="name">

        <label for="category">Choose Category:</label>
        <div class="categoryCont">
            <select name="category" id="category">
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{ $category->Category }}">{{ $category->Category }}</option>
                @endforeach
            </select>
            
            <small> - or create new - </small>

            <input type="text" name="newCategory" id="newCategory">
        </div>

        <label for="contents">Contents:</label>
        <textarea name="contents" id="contents" cols="30" rows="10"></textarea>

        <input type="submit" value="Save Note">
    </form>
</div>
@endsection
