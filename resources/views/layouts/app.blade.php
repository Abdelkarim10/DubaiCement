<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('app.name'))</title>
      
    
        <!-- Fonts -->
       
        <!-- Scripts -->
       

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        @livewireStyles
    </head>
    <body>
       
        @include('layouts.navbar')

 
    {{-- <h1 style="margin-top:10%">{{ basename(__FILE__, '.blade.php') }}</h1> --}}
    

        <div class="container mt-5" >
            <!-- Your page content goes here -->
            @yield('content')
        </div>
        



     <!-- Bootstrap JS (Assuming you have Bootstrap included) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        @livewireScripts
    </body>
</html>
