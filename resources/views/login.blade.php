<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <title>login</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="card border-radius custom-login-card p-4">
                <!-- <div class="card-header align-items-center">
                    <div class="d-flex justify-content-center"><i class="bi bi-pencil-fill" style="font-size: 28px;"></i></div>
                    <div class="d-flex justify-content-center">BUGS Login</div>
                </div> -->
                <div class="card-body">
                    <form id="loginForm" method="POST" action="{{ route('submit.form') }}">
                        <div class="row">
                            <div class="content-center col-md-6">
                                <img src="{{ asset('img/logo.png') }}" class="logo-container" alt="Login">
                                <h1 class="custom-header hide">Sign In</h1>
                                <p class="font-weight-normal custom-paragraph hide">to continue to System</p>
                            </div>
                            <div class="col-md-6">
                                <div class="row d-flex flex-column align-items-center">
                                    <!-- <img src="{{ asset('img/logo.png') }}" class="mb-3" style="width: 15%;" alt="Login"> -->
                                    <h5 class="custom-header mb-3" style="font-weight: 600; color: #0C0342;">BUGS Honorarium Monitoring System</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                                            <input type="text" name="username" class="form-control" id="usernameLogin" aria-describedby="" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <!-- <label for="exampleInputEmail1">First Name</label> -->
                                            <input type="text" name="password" class="form-control" id="passLogin" aria-describedby="" placeholder="Password">
                                            <a href="" class="custom-link">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex flex-row-reverse align-items-end row-button-submit">
                            <button type="submit" class="btn btn-primary custom-btn">Login</button>
                            <a href="{{route('registration')}}" class="custom-link">Dont have an Account?</a>
                        </div>
                    </form>
                </div>
                <!-- <div class="card-footer text-muted">
                    copyright reserve 2024
                </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>
