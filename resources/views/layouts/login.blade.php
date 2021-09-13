<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ CNF_APPNAME }}</title>

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="{{ asset('assets/css/css/styles.css')}}">

</head>

<body class="auth-container">

    @yield('content');        

<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- <script type="text/javascript" src="js/jquery.sticky.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/md5.js"></script>
<script type="text/javascript" src="{{ asset('js/all.js')}}/js/all.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

    </script>
</body>

</html>