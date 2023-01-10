<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    
    <title>@yield('title') - Zepneus</title>

    @include('layouts.head')

</head>

<body>

    @include('layouts.topbar')

    @include('layouts.navbar')

    @yield('contenu')

    @include('layouts.footer')

</body>

</html>
