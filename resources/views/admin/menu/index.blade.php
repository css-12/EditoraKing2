@extends('admin.layouts.principal')

@section('conteudo-principal')

    <h3>{{$subtitulo}}</h3>


<section class="section">
    <table class="highlight">
        <thead>

            <tr>
                <th>Livros</th>
                <th class="right-align">Opções</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($livros as $livro)
            <tr>
                <td>{{$livro}}</td>
                <td class="right-align"><a href="#">Sinopse</a></td>
            </tr>

            @empty
            <tr>
                <td colspan="2">Não existem livros cadastrados</td>
            </tr>

            @endforelse


        </tbody>
    </table>
</section>

@endsection

@section('secundario')

    <h3>{{$subtitulo2}}</h3>


    <section class="section">
        <table class="highlight">
        <thead>

            <tr>
                <th>Livros</th>
                <th class="right-align">Opções</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($vendas as $venda)
            <tr>
                <td>{{$venda}}</td>
                <td class="right-align"><a href="#">Sinopse</a></td>
            </tr>

            @empty
            <tr>
                <td colspan="2">Não existem livros cadastrados</td>
            </tr>

            @endforelse


        </tbody>
    </table>
</section>

@endsection
