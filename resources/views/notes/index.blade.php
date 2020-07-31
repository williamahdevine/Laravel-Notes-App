@extends('layouts.app')

@section('content')
<div class="notes-index">
    <div>
        <h1>Your Notes -</h1>
        <h5><a href="/notes/create">Create New Note</a></small>
    </div>
    
    @if(count($notes) == 0)
    <h4>You do not have any notes.</h4>
    @endif
    
    @foreach($notes as $note)
        <div class="notes-item">
            <!-- <h4><a href="/notes/{{ $note->id }}">{{ $note->User }}</a></h4> -->
            <h4>
                <a href="/notes/{{ $note->id }}"> {{ $note->Name }} </a>
                -
            </h4>
            <h6> {{ $note->Category }}</h6>

            <small>Last updated: {{date('j F, Y', strtotime($note->updated_at)) }}</small>

            <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <button type="submit">                
                    <img src="/icons/trash-solid.svg" alt="Delete">
                </button>
            </form>        

        </div>
    @endforeach
    <div class="mssgCont">
        <p class="mssg">{{ session('mssg') }}</p>
    </div>

</div>
@endsection
