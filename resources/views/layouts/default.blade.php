<!doctype html>
<html>
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('includes.head')


</head>
<body class="bg-gray-900 text-white">
<div id="app" class=" h-screen">

    <header class="w-full">
        @include('includes.header')
    </header>

    <div class="w-full flex ">
        <div class="w-full md:w-1/6 bg-gray-900 md:bg-gray-900 px-2 text-center  bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
            <div class="md:relative mx-auto lg:float-right lg:px-6">
               
            </div>
         </div>

        <div id="main" class="flex-1 ">
                @yield('content')
        </div>

        <div class="w-56 bg-black p-4">
            accounts
        </div>
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
