<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">   
</head>
<body>
    <div class='no-footer' style='min-height: calc(100vh - 145px);'>        
        @include('inc.header')
        
        @if(Request::is('/'))
            @include('inc.if')
        @endif

        @include('inc.messages')

        <div class='container mt-5 mb-5'>
            <div class='row'>
                <div class='col-8'>
                    @yield('content')
                </div>
                <div class='col-4'>
                    @include('inc/aside')
                </div>
            </div>
        </div>
    </div>
    <div class='footer' style='height: 145px;'>        
        @include('inc.footer')
    </div>
</body>
</html>