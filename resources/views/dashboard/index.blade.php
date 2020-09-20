<html>
    <head></head>
    <body>
        <h3>Selamat Datang</h3>
        <span>{{auth()->user()->email}}</span>

        <a href="{{ url('logout') }}">
            <button>Logout</button>
        </a>
    </body>
</html>
