<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('backend.partials.style')
</head>
<body>
<div class="layout-container">
 
    @include('backend.partials.sidebar')
    
    @yield('content')
</div>
    @include('backend.partials.notification')
    @include('backend.partials.scripts')
</body>
</html>