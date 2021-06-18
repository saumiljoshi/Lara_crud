<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>hey,first layout!!!</h1>
    <div id ='header'>
    <h1>Header section</h1>
    </div>
    <div id ='container'>
     @section('container')
     <h2>hey, this is main file</h2>
     @show
    </div>
    <div id ='footer'>
    <h1>footer section</h1>
    </div>
</body>
</html>