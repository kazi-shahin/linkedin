@extends('layouts.master')
@section('content')
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>

          <div class="row">
            <div class="col-xl-6 col-sm-6 ml-auto mr-auto mb-3">
              <!-- Linked In token form START-->
              <div class="card dashboard-card">
                  <button type="button" class="btn btn-primary float-right token_submit_btn" >Get Token</button>
              </div>
            </div>
            <div class="col-xl-12 col-sm-12 ml-auto mr-auto mb-3">
               @if(Session::get('code') != '')
                      <div class="alert mt-3" role="alert">
                          <p class="text-center">Your LinkedIn OAuth token is <b>{{ Session::get('code') }}</b></p>
                          <p class="text-center">Your LinkedIn access token is <br> <b>{{ Session::get('access_token') }}</b></p>
                      </div>

                      <div class="clearfix"></div>
                @endif
              <!-- Linked In token form END-->
            </div>
          </div>
        </div>
      </div>
@endsection

@section('js')
  <script>
      $(document).on('click','.token_submit_btn',function(){
          var email = $('#linkedinEmail').val();
          var password = $('#linkedinPassword').val();
          var validate = '';

          if(email==''){
              validate = validate+"Please enter email</br>";
          }
          if(password==''){
              validate = validate+"Please enter password</br>";
          }

          if(validate==''){
              var return_url = encodeURI('http://satsai.com');
              window.location.href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=811umu5gb9w1o7&redirect_uri="+return_url+"&state=987654321&scope=r_basicprofile";
          }
          else{
              $('#login_success').hide();
              $('#login_error').show();
              $('#login_error').html(validate);
          }
      });
  </script>
@endsection
