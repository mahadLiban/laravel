<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href={{ "img/favicon.ico" }} />
        <!-- Font Awesome icons (free version)-->
        {{-- <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script> --}}
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{asset("css/main.css")  }} rel="stylesheet" />
        <link href={{asset("css/app.css")  }} rel="stylesheet" />

    </head>
        <body id="page-top">

            @yield('content')






                <!-- Contact form JS-->
                <script src={{ "mail/jqBootstrapValidation.js" }}></script>
                <script src={{ "mail/contact_me.js" }}></script>
                <!-- Core theme JS-->
                <script src={{ "js/app.js" }}></script>
        </body>
        </html>
      