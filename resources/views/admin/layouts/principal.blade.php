<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Editora King</title>

</head>
<body class="blue-grey lighten-5">

    {{--Menu Topo--}}
    <nav class="blue-grey darken-4">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo right">Editora King</a>
                <ul class="left">
                    <li><a href="#">Lançamentos</a></li>
                    <li><a href="#">Mais Vendidos</a></li>
                    <li><a href="#">Clube de Assinantes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{--Conteudo Principal--}}
    <div class="container">
        @yield('conteudo-principal')
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    @if (session('sucesso'))

        M.toast({html: "{{session('sucesso')}}"});

    @endif
</script>
</body>
</html>
