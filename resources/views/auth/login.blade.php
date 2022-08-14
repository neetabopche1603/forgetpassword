<!doctype html>
<html lang="en">

<head>
    <title>Login !</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-50 mt-4">
        <div class="card">
            <!-- Notifications -->
            @if ( Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>
            @elseif (Session::get('delete'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('delete') }}</strong>
            </div>
            @elseif (Session::get('faild'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('faild') }}</strong>
            </div>
            @endif
            <!-- Notifications -->

            <div class="card-header text-center bg-dark text-light">
                <h3>Login !</h3>
                <a href="{{route('register')}}" class="float-lg-right btn btn-light"> <span class="text-warning">Register</span></a>
            </div>
            <div class="card-body shadow-lg p-3 mb-5 bg-white rounded">
                <form action="{{route('login_post')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for=""><b>Username :</b></label>
                                <input type="email" name="email" id="" class="form-control" placeholder="">
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" id="" class="form-control" placeholder="">
                                <span class="text-danger">
                                    @error('password')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <div class="forget mt-2">
                     <a href="{{route('forget_password')}}"><strong class="text-success">Forget Password</strong></a>
                    </div>
                </form>
                </form>

            </div>
            <div class="card-footer text-center text-center bg-dark text-light">
                @2022
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>