<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function index() {

        $user = Auth::user();
        // $userEmail = $user->email;
        
        $notes = Notes::where('User', $user->email)->latest()->get();
        
        return view('notes.index', [
            'notes' => $notes,
            'user' => $user,
        ]);
    }

    public function show($id) {
        $note = Notes::findOrFail($id);

        return view('notes.details', [
            'note' => $note,
        ]);
    }

    public function create() {
        $user = Auth::user();

        $categories = Notes::select('Category')
                            ->where('User', $user->email)
                            ->orderBy('Category', "desc")
                            ->groupBy('Category')
                            ->get();

        return view('notes.create', [
            'categories' => $categories,
        ]);
    }

    public function store() {

        $user = Auth::user();
        $note = new Notes();
    
        if(request('category') != '')
            $note->Category = request('category');
        elseif(request('newCategory') != '')
            $note->Category = request('newCategory');
        else
            $note->Category = '';
        
        $note->Name = request('name');  
        $note->Contents = request('contents');
        $note->user = $user->email;



        $note->save();
    
        return redirect('/notes')->with('mssg', 'New Note Created!');
    }

    public function destroy($id) {
        $note = Notes::findOrFail($id);
        $note->delete();
    
        return redirect('/notes');
    }  
    public function editaccount() {
        echo 'KKLHKL';
        // return view('notes.editaccount');
    }
}
