<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('forntend.partials.styles')
</head>
<body>
    <div>

    @include('forntend.partials.header')
    </div>
    @yield('content')
   
    <div>
    @include('forntend.partials.footer')
    </div>
    @include('forntend.partials.scripts')
</body>
</html>