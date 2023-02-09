<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layoutEblood.css')
</head>
<body>
    <main id="body-wrap">

        <div class="layout-wide color-seven">
            <!--Start Preloader Eight-->
            <div class="site-preloader eight">
                <div class="spinner"></div>
            </div>
            <!--End Preloader Eight-->
            @include('layoutEblood.header')
            @yield('content')
            @include('layoutEblood.footer')
            @include('layoutEblood.js')
        </div>
    </main>
</body>
</html>
