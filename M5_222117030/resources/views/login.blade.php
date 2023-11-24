<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-content-center d-flex align-items-center min-vh-100 border-dark">
            <div class="col-md-3">
                <div class="card bg-light-blue mt-5 p-3">
                    <div class="">
                        <h3 class="text-center">LOGIN</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('adminLogin') }}">
                                <button class="btn btn-block btn-login-bg w-100 border-dark">Login as Admin</button>
                            </a>
                        </div>
                        <div class="form-group mt-3">
                            <a href="{{ route('guestLogin') }}">
                                <button class="btn btn-block btn-login-bg w-100 border-dark">Login as Guest</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('styles/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
