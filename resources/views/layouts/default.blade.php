<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>
    <header>
        @include('layouts.default.header')
    </header>

    <main>
        <section>
            @yield('content')
        </section>
    </main>

    <footer>
        @include('layouts.default.footer')
    </footer>

    @component('layouts.default.body_scripts')
    @yield('scripts')
    @endcomponent

</body>

</html>
