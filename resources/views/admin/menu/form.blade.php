@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <form action="{{$action}}" method="POST">

            {{-- cross-site request forgery csrf --}}

            @csrf
            @isset($book)

                @method('PUT')

            @endisset

            <div class="row">

                <div class="input-field col s12">
                    <input type="text" name="titulo" id="titulo" value="{{old('titulo', $book->titulo ?? '')}}"/>
                    <label for="titulo">Título</label>
                    @error('titulo')

                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                    <input type="text" name="subtitulo" id="subtitulo" value="{{old('subtitulo', $book->subtitulo ?? '')}}"/>
                    <label for="subtitulo">Subtítulo</label>
                    @error('subtitulo')

                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                    <input type="text" name="autor" id="autor" value="{{old('autor', $book->autor ?? '')}}"/>
                    <label for="autor">Autor</label>
                    @error('autor')

                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="input-field col s6">
                    <select name="genero_id" id="genero_id">
                        <option value="" disabled selected> Selecione Um Gênero</option>

                        @foreach ($generos as $genero)

                            <option value="{{$genero->id}}"
                                {{old('genero_id', $book->genero->id ?? '') == $genero->id ? 'selected' : ''}}
                                >{{$genero->nome}}</option>

                        @endforeach
                    </select>
                    <label for="genero_id">Gênero</label>
                    @error('genero_id')

                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                @enderror
                </div>

                <div class="input-field col s4">
                    <input type="text" name="pagina" id="pagina" value="{{old('pagina', $book->pagina ?? '')}}"/>
                    <label for="pagina">Quantidade de Páginas</label>
                    @error('pagina')

                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="input-field col s5">
                    <input type="text" name="notaleitor" id="notaleitor" value="{{old('notaleitor', $book->notaleitor ?? '')}}"/>
                    <label for="notaleitor">Nota Média dos Leitores (Exemplo: 5.0)</label>
                    @error('notaleitor')

                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                   <textarea name="sinopse" id="sinopse" class="materialize-textarea">{{old('sinopse',  $book->sinopse ?? '')}}</textarea>
                    <label for="sinopse">Sinopse</label>
                    @error('sinopse')

                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>

                    @enderror
                </div>
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{route('admin.menu.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>
        </form>
    </section>

@endsection
