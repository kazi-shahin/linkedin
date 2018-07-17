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

        <div class="card card-login mx-auto mt-8">

          <div class="card-header text-center">Login</div>

          <div class="card-body">

            <form id="login_form" method="post" action="">

                {{ csrf_field() }}

              <div class="alert alert-success" id="login_success" style="display:none"></div>

              <div class="alert alert-danger" id="login_error" style="display:none"></div>



              <div class="form-group">

                <label for="loginEmail">Email</label>

                <input class="form-control" name="email" id="email" type="text">

              </div>

              <div class="form-group">

                <label for="loginPassword">Password</label>

                <input class="form-control" name="password" id="password" type="password">

              </div>

              <button class="btn btn-primary btn-block mt-4" type="submit">Login</button>

            </form>

            <!--div class="text-center">

              <a class="d-block small mt-3" href="register.html">Register an Account</a>

            </div-->

          </div>

        </div>

      </div>

      <!-- Main Content Area END-->



    <!-- Bootstrap core JavaScript-->

    <!--script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script-->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- custom JavaScript-->

    <script src="{{ asset('assets/js/custom.js') }}"></script>



  <script>

      $(document).on('submit','#login_form',function(event){

          event.preventDefault();

          submit_login_form();

      });



      function submit_login_form(){

          var email = $('#email').val();

          var password = $('#password').val();

          var validate = '';



          if(email==''){

              validate = validate+"Please enter email</br>";

          }

          if(password==''){

              validate = validate+"Please enter password</br>";

          }



          if(validate==''){

              var formData = new FormData($('#login_form')[0]);

              var url = '{{ url('login') }}';

              $.ajax({

                  type: "POST",

                  url: url,

                  data: formData,

                  success: function (data) {

                      if(data.status == 200){

                          window.location.href="{{ url('/dashboard') }}";

                      }

                      else{

                          $('#login_success').hide();

                          $('#login_error').show();

                          $('#login_error').html(data.reason);

                      }

                  },

                  cache: false,

                  contentType: false,

                  processData: false

              });

          }

          else{

              $('#login_success').hide();

              $('#login_error').show();

              $('#login_error').html(validate);

          }

      }

  </script>



  </body>

</html>