<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('backend.doctor.partials.styles')
</head>
<body>
    
    <div class="layout-container">
    @include('backend.doctor.partials.sidebar')
   
    @yield('content')
    </div>
    
    @include('backend.doctor.partials.notificationmodal')
    @include('backend.doctor.partials.scripts')
    @stack('scripts')
</body>
</html>