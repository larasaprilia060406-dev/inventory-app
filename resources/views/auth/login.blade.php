<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card">

                <div class="card-header">
                    Login
                </div>

                <div class="card-body">

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="/login"
                          method="POST">

                        @csrf

                        <div class="mb-3">
                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control">
                        </div>

                        <button class="btn btn-primary">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>