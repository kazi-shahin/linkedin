<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>LinkedIn login</title>



    <!-- Bootstrap core CSS -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome cdn -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- custom CSS-->

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

  </head>



  <body class="bg-login">

      <!-- Main Content Area START-->

      <div class="container">

        <div class="card card-login mx-auto mt-5">

          <div class="card-header text-center">Register</div>

          <div class="card-body">

            <form>

              <div class="form-group">

                <label for="regFirstname">First Name</label>

                <input class="form-control" id="regFirstname" type="text" required="">

              </div>



              <div class="form-group">

                <label for="regLastname">Last Name</label>

                <input class="form-control" id="regLastname" type="text" required="">

              </div>



              <div class="form-group">

                <label for="loginEmail">Email</label>

                <input class="form-control" id="loginEmail" type="email" required="">

              </div>

              <div class="form-group">

                <label for="loginPassword">Password</label>

                <input class="form-control" id="loginPassword" type="password" required="">

              </div>

              <button class="btn btn-primary btn-block mt-4 mb-4" type="submit">Register</button>

            </form>

          </div>

        </div>

      </div>

      <!-- Main Content Area END-->



      <!-- Bootstrap core JavaScript-->

      <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>

      <script src="{{ asset('assets/js/popper.min.js') }}"></script>

      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

      <!-- custom JavaScript-->

      <script src="{{ asset('assets/js/custom.js') }}"></script>



  </body>

</html>