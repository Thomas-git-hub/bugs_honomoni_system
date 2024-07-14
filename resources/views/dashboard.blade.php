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
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font-awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Dashboard</title>
  </head>
  <body>
    <div class="container-fluid">
        @include('includes.navbar')

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

              <div class="card custom-card-banner">
                <div class="card-body">
                    <div class="row d-flex flex-column justify-content-start mx-3">
                        <h3 class="card-title">Honorarium Transactions</h3>
                        <p class="card-paragraph">Summary of Honorarium Transactions</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                  <i class="bi bi-star-fill"></i>
                                  <h1 class="small-card-title" style="color: #0F9D58;">1523</h1>
                                  <p class="small-card-paragraph">New notifications</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                  <i class="bi bi-people-fill"></i>
                                  <h1 class="small-card-title">0</h1>
                                  <p class="small-card-paragraph">On Queue Transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                  <i class="bi bi-slash-circle-fill"></i>
                                  <h1 class="small-card-title" style="color: #DB4437;">1523</h1>
                                  <p class="small-card-paragraph">Canceled Transactions (INC Documents)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
