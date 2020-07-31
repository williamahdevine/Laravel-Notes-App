@extends('layouts.app')

@section('content')
<div class="details-wrapper">
  <a href="/notes" class="btn backBTN">Back</a>

  <div class="wrapper notes-details">
    <h1>Name: {{ $note->Name }}</h1>
    <h5 class="type">Category - {{ $note->Category }}</h4>
    <p class="base">{{ $note->Contents }}</p>
  </div>

</div>
@endsection
