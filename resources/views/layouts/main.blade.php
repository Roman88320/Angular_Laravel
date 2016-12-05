<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Driving</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="styles/app.css" />
    </head>
    <body ng-app="authApp" class="main">

        <div class="container">
            @include('header.login')
            @yield('content')
        </div>        
     
    </body>

    <!-- Application Dependencies -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/build/angular-ui-router.js"></script>
    <script src="node_modules/satellizer/satellizer.js"></script>

    <!-- Application Scripts -->
    <script src="scripts/app.js"></script>
</html>