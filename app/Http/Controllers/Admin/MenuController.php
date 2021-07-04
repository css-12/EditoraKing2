<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\BookRequest;
use App\Models\Book;

class MenuController extends Controller
{
    public function menu()
    {

        $subtitulo = 'Lançamentos';

        $books = Book::all();


        return view('admin.menu.index', compact('subtitulo', 'books'));
    }

    public function formAdd()
    {
        return view('admin.menu.form');
    }

    public function adicionar(BookRequest $request)
    {

        Book::create($request->all());

        $request->session()->flash('sucesso', "Livro $request->titulo incluído com sucesso!");

        return redirect()->route('admin.menu.listar');
    }
}
