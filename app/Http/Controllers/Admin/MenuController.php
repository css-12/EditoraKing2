<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {

        $subtitulo = 'Lançamentos';

        $livros = ['Sherlock Holmes', 'It - A Coisa', 'Lady Killers', 'Tartarugas Até Lá Embaixo', 'Cemitério Maldito'];

        $subtitulo2 = 'Mais Vendidos';

        $vendas = ['O Que Aconteceu Com Annie', 'Extraordinário', 'O Homem de Giz', 'Crônicas de Gelo e Fogo', 'Carrie a Estranha'];



        return view('admin.menu.index', compact('subtitulo', 'livros', 'subtitulo2', 'vendas'));
    }
}
