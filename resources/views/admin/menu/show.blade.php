@extends('admin.layouts.principal')

@section('conteudo-principal')

    <h3>{{$book->titulo}}</h3>

    <section class="section">
        <div class="row">

            <span class="col s12">
                <h4>Subtítulo</h4>
                <h5>{{$book->subtitulo}}</h5>
            </span>
        </div>

        <div class="row">
            <span class="col s12">
                <h4>Autor</h4>
                <h5>{{$book->autor}}</h5>
            </span>
        </div>

        <div class="row">
            <span class="col s6">
                <h5>Gênero</h5>
                <h5>{{$book->genero->nome}}</h5>
            </span>

            <span class="col s4">
                <h5>Quantidade de Páginas</h5>
                <h5>{{$book->pagina}}</h5>
            </span>
        </div>

        <div class="row">
            <span class="col s5">
                <h4>Nota Média dos Leitores</h4>
                <h5>{{$book->notaleitor}}</h5>
            </span>
        </div>

        <div class="row">
            <span class="col s12">
                <h4>Sinopse</h4>
                <h5>{{$book->sinopse}}</h5>
            </span>
        </div>

        <div class="right-align">
            <a href="{{url()->previous()}}" class="btn-flat waves-effect">Voltar</a>
        </div>

    </section>
@endsection
