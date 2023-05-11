<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud - DC Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <h1>
            @yield('page.title')
        </h1>
    </header>
    <main>
        @yield('page.main')

    </main>
    <footer>
        <div class="container "> 
            <p>Create from Class 89</p>
        </div>
        
    </footer>
</body>

</html>
