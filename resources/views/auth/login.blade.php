<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>Login</h1>

        @if (Session::has('status'))
            <div class="alert alert-danger mt-3">
                {{ Session::get('status') }}
            </div>
        @endif

        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" />
            </div>
            <button class="btn btn-primary mt-3" type="submit">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
