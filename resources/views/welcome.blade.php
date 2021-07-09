<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
        @livewireStyles


        
        <title>Laravel</title>

    </head>
    <body style=" background: #f8f8f8;">
        <div id="app">
            <div id="btn-menu" class="btn-menu">
                <i class="fas fa-bars"></i>
            </div>
            <header>
                <nav style="position: fixed;" id="nav" class="shadow p-3 mb-5 rounded nav sticky-top nav-pills flex-column flex-sm-row">
                      <a id="home" class=" a-color flex-sm-fill text-sm-center nav-link nav-hover nav-fixed" href="{{ url('/') }}"><i class="fas fa-home"></i>
                      </a>

                      <a  class="a-color flex-sm-fill text-sm-center nav-link" id="registro" href="{{ url('crud/registro') }}"><i class="fas fa-address-card"></i>
                      
                      </a>

                      <a id="consulta" class="a-color flex-sm-fill text-sm-center nav-link" href="{{ url('crud/consulta') }}">
                      <i class="fas fa-search"></i>
                      </a>

                      
                      
                </nav>
                <!--
                <nav class="nav2">
                  <i class="fas fa-bars"></i>
                </nav>
                -->
              
            </header>
            <div class="container container2">
                @yield('contenido',View("crud.home"))
            </div>
            <!--
            <footer class="bg-dark">
                <div class=" ">
                    <p>Footer</p>
                </div>
            </footer>
             -->

        <!--<body class="antialiased">
           < @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        --> 

         


           
        <div>
            
     @yield('script') 
     @livewireScripts
     <script>
         $(document).ready(function(){
             $("#btn-menu").click(function(){
                
                $("#nav").toggleClass('menu-show');
             })
         })
     </script>  
     @section('script')

@endsection
    </body>


</html>
