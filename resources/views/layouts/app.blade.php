<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Titulo aqui </title>
</head>
<body>
    <header>
        header
    </header>
    @yield('content') <!-- Aqui é onde o conteúdo das views será injetado Conteudo dinamico-->
    <footer>
        footer
    </footer>


</body>
</html>