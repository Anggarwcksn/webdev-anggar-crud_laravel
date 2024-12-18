<html>
    <head>
        <title>Login</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body class="m-3">

        <form action="{{ route('auth.authenticate') }}" method="POST">
            @csrf

            <div class="col-sm-8 m-2">
                <h1 class="h3">Login</h1>
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
            </div>

            <div class="col-sm-8 m-2">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="name@email.com" required>
            </div>

            <div class="col-sm-8 m-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>

            <div class="col-sm-8 m-2">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </div>

            <div class="col-sm-8 m-2">
                <p>Don't have an account? <a href="{{ route('auth.register') }}">Register here</a></p>
            </div>
        </form>

    </body>
</html>
