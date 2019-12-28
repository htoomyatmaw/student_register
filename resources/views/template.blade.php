<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Student Register</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

        

        <link href="{{asset('bootstrap-4.11.0/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity-crossorigin="anonymous" rel="stylesheet">

        <!-- <link href="{{ mix('css/app.css') }}"> -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/style.css') }}" rel="styelsheet"> -->

        <style>
            #app{
                margin: 0px;
                padding: 0px;
                background-color:#5619A4;
            }
        </style>
        
    </head>
    

    <body>
        <div id="app">
            <v-app>

            @if(Auth::check())
                
                <template-toolbar-component :login_status="true"></template-toolbar-component>
            @else
                <template-toolbar-component :login_status="false"></template-toolbar-component>
            @endif
                    
               
            @yield('content')
           
            
            <v-app>
        </div>

    </body>

    
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('bootstrap-4.11.0/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('bootstrap-4.11.0/js/jquery.min.js')}}"></script>
</html>
