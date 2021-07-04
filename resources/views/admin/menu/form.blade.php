@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <form action="{{route('admin.menu.adicionar')}}" method="POST">

            {{-- cross-site request forgery csrf --}}

            @csrf

            <div class="input-field">
                <input type="text" name="titulo" id="titulo"/>
                <label for="titulo">Título</label>
                @error('titulo')

                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="autor" id="autor"/>
                <label for="autor">Autor</label>
                @error('autor')

                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="pagina" id="pagina"/>
                <label for="pagina">Quantidade de Páginas</label>
                @error('pagina')

                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="notaleitor" id="notaleitor"/>
                <label for="notaleitor">Nota Média dos Leitores (Exemplo: 5.0)</label>
                @error('notaleitor')

                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                @enderror
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>
        </form>
    </section>

@endsection
