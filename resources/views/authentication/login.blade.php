<!doctype html>
<!--
* Developer : Ahmad Rizki (Fullstack Developer)
* This Website using Template :
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="{{ asset('assets/static/assets.png') }}">
    <title>Login - Portfolio</title>
    <!-- CSS files -->
    <link href="{{ url('assets/dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ url('assets/dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ url('assets/dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ url('assets/dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ url('assets/dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.js') }}" defer></script>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        .error {
            color: #FF0000;
            font-style: italic;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
            background: linear-gradient(-45deg, #ffd0d0, #1100ff, #802ece, #ef8120);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body class=" d-flex flex-column bg-azure-lt">
    <script src="{{ url('assets/dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4 h2 text-white">
                            PORTFOLIO <br>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h3 class="h3 text-center mb-4">Selamat Datang, Silahkan Login untuk menggunakan
                                    aplikasi</h3>
                                <form action="{{ route('login.post') }}" method="post" name="handleAjax"
                                    id="handleAjax">
                                    @csrf
                                    {{-- Error Alert --}}
                                    <div id="errors-list"></div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Masukkan email" autofocus="true">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" id="submitLogin"
                                            class="btn btn-primary w-100">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block text-center">
                    <iframe src="https://lottie.host/embed/1523dad4-cfef-40cf-8540-e7f823aa09b8/6BPh2N8U6X.lottie"
                        width="600px" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ url('assets/dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ url('assets/dist/js/demo.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets/extentions/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/extentions/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            /*------------------------------------------==============================================================================================================================================================
            --------------------------------------------==============================================================================================================================================================
            Ajax Login
            --------------------------------------------==============================================================================================================================================================
            --------------------------------------------==============================================================================================================================================================*/

            if ($("#handleAjax").length > 0) {
                $("#handleAjax").validate({
                    rules: {
                        email: {
                            required: true,
                        },
                        password: {
                            required: true,
                        },
                    },
                    messages: {
                        email: {
                            required: "Email tidak boleh kosong",
                        },
                        password: {
                            required: "Password tidak boleh kosong",
                        },
                    },

                    submitHandler: function(form) {

                        $('#submitLogin').html(
                            '<span class="spinner-border spinner-border-sm me-2" role="status"></span> Please Wait<span class="animated-dots"></span>'
                        );
                        $("#submitLogin").attr("disabled", true);


                        $.ajax({
                            url: $(form).attr('action'),
                            data: $(form).serialize(),
                            type: "POST",
                            dataType: 'json',

                            success: function(data) {

                                if (data.status) {
                                    $('#submitLogin').html(
                                        '<span class="spinner-border spinner-border-sm me-2" role="status"></span> Redirect to Dashboard<span class="animated-dots"></span>'
                                    );
                                    window.location = data.redirect;
                                } else {

                                    $('#submitLogin').html('Login');
                                    $("#submitLogin").attr("disabled", false);
                                    $('#username').focus();

                                    $(".alert").remove();
                                    $.each(data.errors, function(key, val) {
                                        $("#errors-list").append(
                                            "<div class='alert  alert-danger alert-dismissible' role='alert'><div class='d-flex'><div><svg xmlns='http://www.w3.org/2000/svg' class='icon alert-icon' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'></path><path d='M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0'></path><path d='M12 8v4'></path><path d='M12 16h.01'></path></svg></div><div><h4 class='alert-title'>" +
                                            data.header +
                                            "</h4><div class='text-secondary'>" +
                                            val +
                                            "</div></div></div><a class='btn-close' data-bs-dismiss='alert' aria-label='close'></a></div>"
                                        );
                                    });
                                }

                            },
                        });
                    }
                })
            }

            /*------------------------------------------==============================================================================================================================================================
            --------------------------------------------==============================================================================================================================================================
            End Ajax
            --------------------------------------------==============================================================================================================================================================
            --------------------------------------------==============================================================================================================================================================*/
        });
    </script>
</body>

</html>
