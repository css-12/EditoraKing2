@extends('admin.layouts.principal')

@section('conteudo-principal')

    <h3>{{$subtitulo}}</h3>


<section class="section">
    <table class="highlight">
        <thead>

            <tr>
                <th>Livros</th>
                <th class="center-align">Subtítulos</th>
                <th class="center-align">Autores</th>
                <th class="center-align">Gênero</th>
                <th class="center-align">Nota Média dos Leitores</th>
                <th class="right-align">Opções</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($books as $book)
            <tr>
                <td >{{$book->titulo}}</td>
                <td class="center-align">{{$book->subtitulo}}</td>
                <td class="center-align">{{$book->autor}}</td>
                <td class="center-align">{{$book->genero->nome}}</td>
                <td class="center-align">{{$book->notaleitor}}</td>
                <td class="right-align">

                    <a href="{{route('admin.menu.show', $book->id)}}" title="Ver">

                        <span>
                            <i class="material-icons indigo-text text-darken-3">remove_red_eye</i>
                        </span>

                    </a>
                    <a href="{{route('admin.menu.edit', $book->id)}}" title="Editar">

                        <span>
                            <i class="material-icons blue-text text-accent-3">edit</i>
                        </span>

                    </a>

                    <form action="{{route('admin.menu.destroy', $book->id)}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')

                        <button style="border:0;background:transparent" type="submit" title="Remover">
                            <span style="cursor:pointer">
                                <i class="material-icons red-text text-accent-4">delete_forever</i>
                            </span>
                        </button>
                    </form>
                    </td>
            </tr>

            @empty
            <tr>
                <td colspan="5">Não existem livros cadastrados</td>
            </tr>

            @endforelse


        </tbody>
    </table>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-large" href="{{route('admin.menu.create')}}">
            <i class="large material-icons">add</i>
        </a>
    </div>


</section>

@endsection


