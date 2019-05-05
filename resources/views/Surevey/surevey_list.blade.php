<html>
    <head>
        <title>halaman setelah login</title>
    </head>
    <body>
    <p>hi !  , {{Session::get('full_name')}} </p>
    <h2>Test Muncul Email after login : {{Session:get('email')}}</h2>
    <h2>Status login : {{Session::get('login')}}</h2>

    <a href="/logout" class="btn btn-primary">Logout</a>
    </body>
</html>