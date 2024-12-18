<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('backend.admin.partials.styles')
</head>

    @include('backend.admin.partials.sidebar')
    
    @yield('content')

    @include('backend.admin.partials.scripts')
    @include('backend.admin.partials.notificationmodal')

</html>