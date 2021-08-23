<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Genero;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Lançamentos';

        $books = Book::with(['genero'])->get();


        return view('admin.menu.index', compact('subtitulo', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        $action = route('admin.menu.store');
        return view('admin.menu.form', compact('action', 'generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        Book::create($request->all());

        $request->session()->flash('sucesso', "Livro $request->titulo incluído com sucesso!");

        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::with(['genero'])->find($id);

        return view('admin.menu.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::with(['genero'])->find($id);

        $generos = Genero::all();

        $action = route('admin.menu.update', $book->id);

        return view('admin.menu.form', compact('book', 'generos', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());

        $request->session()->flash('sucesso', "Livro alterado com sucesso");
        return redirect()->route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Book::destroy($id);
        $request->session()->flash('sucesso', "Livro excluído com sucesso!");
        return redirect()->route('admin.menu.index');
    }
}
