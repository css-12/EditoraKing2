@extends('admin.layouts.principal')

@section('conteudo-principal')

    <h3>{{$subtitulo}}</h3>


<section class="section">
    <table class="highlight">
        <thead>

            <tr>
                <th>Livros</th>
                <th class="center-align">Autores</th>
                <th class="center-align">Número de Páginas</th>
                <th class="center-align">Nota Média dos Leitores</th>
                <th class="right-align">Opções</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($books as $book)
            <tr>
                <td >{{$book->titulo}}</td>
                <td class="center-align">{{$book->autor}}</td>
                <td class="center-align">{{$book->pagina}}</td>
                <td class="center-align">{{$book->notaleitor}}</td>
                <td class="right-align"><a href="#">Sinopse</a></td>
            </tr>

            @empty
            <tr>
                <td colspan="2">Não existem livros cadastrados</td>
            </tr>

            @endforelse


        </tbody>
    </table>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-large" href="{{route('admin.menu.form')}}">
            <i class="large material-icons">add</i>
        </a>
    </div>


</section>

@endsection


