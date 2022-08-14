<!doctype html>
<html lang="en">

<head>
    <title>Forget Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4 w-50">
        <div class="card">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
            <div class="card-header text-center bg-dark text-light">
                <h3>Forget Password</h3>
            </div>
            <div class="card-body shadow-lg p-3 mb-0 bg-white rounded">
                <form action="{{route('forget.password.post')}}" method="post" >
                    @csrf
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-12 col-sm-3">
                        <div class="form-group">
                            <label for="">E-mail Address</label>
                            <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </form>
            </div>
            <div class="card-footer text-light bg-dark text-center">
                @2022 Neeta Bopche
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>