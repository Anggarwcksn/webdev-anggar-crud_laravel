<html>
    <head>
        <title>Login</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body class="m-3">

        <form action="{{ route('auth.store') }}" method="POST">
            @csrf

            <div class="col-sm-8 m-2">
                <h1 class="h3">Register</h1>
            </div>

            <div class="col-sm-8 m-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name@email.com">
            </div>

            <div class="col-sm-8 m-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>

            <div class="col-sm-8 m-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>

            <div class="col-sm-8 m-2">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Regist</button>
            </div>

        </form>

    </body>
</html>
