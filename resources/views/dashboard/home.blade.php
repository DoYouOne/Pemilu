<html>
    <head></head>
    <body>
        <h3>Selamat Datang</h3>
        <h4>Ini adalah halaman user ber status {{ auth()->user()->status }}</h4>
        <span>{{auth()->user()->email}}</span>

        <a href="{{ url('logout') }}">
            <button>Logout</button>
        </a>
    </body>
</html>
