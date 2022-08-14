<!doctype html>
<html lang="en">

<head>
    <title>Reset Password Link</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4 w-50">
        <div class="card">
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
            <div class="card-header text-center bg-dark text-light">
                <h3>Reset Password</h3>
            </div>
            <div class="card-body shadow-lg p-3 mb-0 bg-white rounded">
                <form action="{{route('reset.link.post')}}" method="post">
                @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
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
                    <div class="col-6 col-md-6 col-lg-12 col-sm-3">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-12 col-sm-3">
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>