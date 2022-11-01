<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('adminassets/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('adminassets/assets/images/favicon.png') }}" type="image/x-icon">
    <title>Case</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/bpg/css/bpg-banner-quadrosquare-caps.min.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('adminassets/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/css/responsive.css') }}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center"
                    src="{{ asset('adminassets/assets/images/login/2.jpg') }}" alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo text-start" href="index.html"><img
                                    class="img-fluid for-dark"
                                    src="{{ asset('adminassets/assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="post" action="{{ route('login') }}">
                                @csrf
                                <h4>ავტორიზაცია</h4>
                                <p>სისტემაში შესასვლელად აუცილებელია ავტორიზაცია</p>
                                <div class="form-group">
                                    <label class="col-form-label">ელფოსტა</label>
                                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com"
                                        name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">პაროლი</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block w-100" type="submit">შესვლა</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{ asset('adminassets/assets/js/jquery-3.5.1.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('adminassets/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('adminassets/assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('adminassets/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('adminassets/assets/js/config.js') }}"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('adminassets/assets/js/script.js') }}"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>
