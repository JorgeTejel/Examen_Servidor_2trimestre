<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
<div id="app">
    <header class="h-17vh bg-red-500 border-3 p-4
                flex flex-row justify-between content-center">
        <img src="{{asset("img/logo.png")}}" alt="">
        <h1>Jorge Tejel Examen Servidor</h1>
        @guest
            <div>
                <a href="login">Login</a>
                <a href="register">Register</a>
            </div>
        @endguest
        @auth
            Conectado como {{auth()->User()->name}}
            <form action="logout" method="post">
                @csrf
                <input type="submit" value="Logout">
            </form>
        @endauth
    </header>
    <nav class="h-12vh bg-red-500 border-3 px-10
                flex flex-row justify-between content-center">
        <a class="h-1" href="{{route("alumnos.index")}}">Alumnos</a>
    </nav>
    <main class="bg-yellow-300 border-3 justify-between ">
        @yield('contenido')
    </main>
    <footer class="h-12vh bg-red-500 border-2
                flex flex-row justify-between content-center">
        @copyright Jorge Tejel
    </footer>
</div>
</body>
</html>
