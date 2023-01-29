<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{  url('public/resources/images/favicon.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{ url('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('public/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{ url('public/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ url('public/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{ url('public/assets/css/icons.css')}}" rel="stylesheet">
    <title>{{ SITE_TITLE }}</title>
    <style> 
.btn-login {
  color: #fff;
  background-color: #124fa0;
  border-color: #3685d4;
}
.btn-login-smp {
  color: #fff;
  box-sizing: border-box;
  position: absolute;
  width: 300px;
  height: 40px;
  /* left: 129px; */
  /* top: 768px; */
  background: #F05A64;
  border: 1px solid #F05A64;
  box-shadow: 0px 4px 10px rgba(240, 90, 100, 0.25);
  border-radius: 7px;
  text-align: center;
  font-weight: 500;
  font-size: 20px;
  color: #FFFFFF;
}
.btn-login-smp:hover {
  color: #fff;
  background-color:#F05A64;
  border-color: #F05A64;
}
.btn-login:hover {
  color: #fff;
  background-color:#3685d3;
  border-color: #3685d4;
}
.btn-check:focus + .btn-login,
.btn-login:focus {
  color: #fff;
  background-color:#3685d3;
  border-color: #3685d4;
  box-shadow: 0 0 0 0.25rem #551a1a;
}
.btn-check:active + .btn-login,
.btn-check:checked + .btn-login,
.btn-login.active,
.btn-login:active,
.show > .btn-login.dropdown-toggle {
  color: #fff;
  background-color: #551a1a;
  border-color: #3685d4;
}
.btn-check:active + .btn-login:focus,
.btn-check:checked + .btn-login:focus,
.btn-login.active:focus,
.btn-login:active:focus,
.show > .btn-login.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem #551a1a;
}
.btn-login.disabled,
.btn-login:disabled {
  color: #fff;
  background-color: #551a1a;
  border-color: #551a1a;
}

.card-smp{
    position: absolute;
    width: 380px;
    height: 440px;
    left: 80px;
    top: 70px;

    background: #FFFFFF;
    box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.text-smp{
    position: absolute;
    width: 100px;
    height: 55px;
    left: 29px;
    top: 30px;
    font-weight: 500;
    font-size: 30px;
    /* line-height: 55px; */
    /* identical to box height */
    text-align: center;
    color: #38424C;

}

.smp-input{
    box-sizing: border-box;

    /* position: absolute; */
    width: 300px;
    height: 40px;
    /* left: 129px; */
    /* top: 533px; */

    background: #FFFFFF;
    border: 1px solid #F05A64;
    box-shadow: 0px 4px 4px rgba(240, 90, 100, 0.25);
    border-radius: 7px;

    font-weight: 300;
    font-size: 18px;
    
    display: flex;
    align-items: center;

    color: #9197B3;
}

.input-group-text {
    padding: 0.0rem 0.0rem;
}

</style>
</head>

<body class="bg-login-smp">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">

                        <!-- <div class="card smp" style="background-color: rgba(0, 0, 0, .2) !important; border: 1px solid white !important"> -->
                        <div class="card-smp">
                            <div class="card-body">
                                <div class="p-4 rounded">
                                    <!-- <div class="mb-4 text-center">
                                        <img src="{{  url('resources/images/white-logo.png')}}" width="180" alt="" />
                                    </div> -->
                                    <div class="pb-4 pt-4 text-left">
                                        <h3 class="text-smp" >{{ __('message.Login')}}</h3>
                                        <p style="font-size: 15px;color: #F05A64; margin-top:10px;" >{{ __('message.Welcome Back!')}}</p>
                                    </div>
                                    @if (session()->flash('error'))  
                                        <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="font-25 text-danger"><i class='bx bxs-message-square-x'></i>
                                                </div>
                                                <div class="ms-2">
                                                    <!-- <h6 class="mb-0 text-danger">Danger Alerts</h6> -->
                                                    <div class="text-danger">{{  session()->flash('error') }}</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session()->flash('success')) 
                                        <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="font-25 text-success"><i class='bx bxs-check-circle'></i>
                                                </div>
                                                <div class="ms-2">
                                                    <!-- <h6 class="mb-0 text-success">Success Alerts</h6> -->
                                                    <div class="text-success">{{  session()->flash('success'); }}</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="form-body">
                                    <form action="{{  route('login') }}" method="POST" class="row g-3" id="form_login">
                                            @csrf
                                        <div class="col-md-12">
                                                <label for="email" class="form-label" style="font-weight: 300;font-size: 15px;color: #38424C;">{{ __('message.Email') }}</label>
                                                <div class="input-group"><input type="email" class="form-control smp-input border-end-0" style="font-weight: 300;font-size: 15px;color: #38424C;" name="email" id="email" placeholder="{{ __('message.Email Address') }}"><a href="javascript:;" style="font-weight: 300;font-size: 20px;line-height: 38px;align-items: center;color: #9197B3;border: 1px solid #F05A64;" class="input-group-text bg-transparent"><i class='bx bx-envelope'></i></a>
                                                </div><span class="err_email text-danger"></span>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="password" class="form-label" style="font-weight: 300;font-size: 15px;color: #38424C;" >{{ __('message.Password') }}</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control smp-input border-end-0" name="password" style="font-weight: 300;font-size: 15px;color: #38424C;" id="password" placeholder="{{ __('message.Enter Password') }}"> <a href="javascript:;" style="font-weight: 300;font-size: 20px;line-height: 38px;align-items: center;color: #9197B3;border: 1px solid #F05A64;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                                <span class="err_password text-danger"></span>
                                            </div>
                                            

                                            <div class="pb-4 pt-4 col-md-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-login-smp" >{{ __('message.LOGIN')}}  <i class="lni lni-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{  url('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{  url('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{  url('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{  url('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{  url('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--Password show & hide js -->
    <script>

$(function() {
            'use strict';

            /**
             * login-form validation
             * @date: 2021-12-10 
             * 
             */
            $("#form_login").on('submit', function(e) {
                e.preventDefault();
                let valid = true;
                let form = $(this).get(0);
                let emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                let email = $("#email").val();
                let err_email = "{{ __('message.Enter Valid Email Address') }}";
                let password = $("#password").val();
                let err_password = "{{ __('message.Enter Valid Password') }}";

                if (email.length === 0 || !emailPattern.test(email)) {
                    $(".err_email").text(err_email);
                    $('#email').addClass('is-invalid');
                    valid = false;
                } else {
                    $(".err_email").text('');
                    $('#email').addClass('is-valid');
                    $('#email').removeClass('is-invalid');

                }
                if (password.length === 0) {
                    $(".err_password").text(err_password);
                    $('#password').addClass('is-invalid');
                    valid = false;
                } else {
                    $(".err_password").text('');
                    $('#password').addClass('is-valid');
                    $('#password').removeClass('is-invalid');
                }
                if (valid) {
                    form.submit();
                }
            });
            // End :: login validation

      
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{ url('public/assets/js/app.js') }}"></script>
</body>

</html>