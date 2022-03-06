<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <meta name="theme-color" content="#7952b3">


        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }
    
          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>
    
            
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="d-flex h-100 text-center text-white bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
              <div>
                <h3 class="float-md-start mb-0">Cover</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                  <a class="nav-link"  href="{{ url('/about') }}">Features</a>
                  <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </nav>
              </div>
            </header>
          
            <main class="px-3" id="app">
              <router-view></router-view>
            </main>
          
            <footer class="mt-auto text-white-50">
              <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
            </footer>
          </div>
          
        </div>
    </body>
</html>