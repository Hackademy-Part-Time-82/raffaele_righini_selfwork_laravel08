<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Mail\BookMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    public function index(){

        $title = 'Libreria RR';
        $books = Book::all();
        return view('index', ['books'=> $books], compact('title'));
        
    }

    public function show(Book $book){

        $title = 'Libreria RR';
        return view('show', compact('book'), compact('title'));

    }

    public function create(){

        $title = 'Libreria RR';
        return view('create', compact('title'));
       
    }

    public function store(BookStoreRequest $request){

        $path_image= '';
        if($request->hasFile('image')){
            //salvi
            $path_image= $request->file('image')->store('covers', 'public');
        }
        // else{ else non è più necessario perchè ho messo l'immagine di default a riga 37 prima ancora di entrare nell'if
        //     //fai altro
        //     $path_image= 'img_progetto_biblioteca\default.png';
        // }
        $book =Book::create([
            'name'=> $request->input('name'),
            'author'=> $request->input('author'),
            'pages'=> $request->input('pages'),
            'year'=> $request->input('year'),
            'image'=> $path_image,
            ]);

            Mail::to('admin@rrlibrary.it')->send(new BookMail($book));
            return redirect()->route('books.index')->with('success', 'Libro aggiunto correttamente');

    }

    public function destroy(Book $book){

        $book-> delete();
        return redirect()->route('books.index')->with('success', 'Libro eliminato correttamente');

    }
}
