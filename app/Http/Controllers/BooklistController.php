<?php

namespace App\Http\Controllers;

use App\Models\Booklist;
use Illuminate\Http\Request;

class BooklistController extends Controller
{
    //
    public function saveBook(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'author' => 'required',
            'status' => 'required',
        ]);

        Booklist::create([
            'title' => $req->title,
            'author' => $req->author,
            'genre' => $req->genre,
            'status' => $req->status,
            'start' => $req->start,
            'finish' => $req->finish,
            'review' => $req->review,
            'user_id'=> auth()->user()->id,
        ]);
        return redirect()->route('dashboard');
    }
    public function deleteBook($id)
    {
        $data= Booklist::find($id);
        $data->delete();
        return redirect()->route('dashboard');
        
    }
    public function editBook($id)
    {
        $list= Booklist::find($id);
        return view('editBook', ['list' => $list]);
        // return redirect()->route('dashboard');????????????
        
    }
    public function updateBook(Request $req)
    {
        $book = Booklist::find($req->id);
        $book->update([
            'title' => $req->title,
            'author' => $req->author,
            'genre' => $req->genre,
            'status' => $req->status,
            'start' => $req->start,
            'finish' => $req->finish,
            'review' => $req->review,
        ]);

        return redirect()->route('dashboard');

        // Booklist::create([
        //     'title' => $req->title,
        //     'author' => $req->author,
        //     'genre' => $req->genre,
        //     'status' => $req->status,
        //     'start' => $req->start,
        //     'finish' => $req->finish,
        //     'review' => $req->review,
        // ]);
    }
  
}
