<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>

    <body>
        <!-- navigation -->
        @include('layouts.navigation')
        
        <!-- main area -->
        <section>
            @section('main')
                <h4>Main area</h4>
            @show
        </section>
        
        @include('layouts.footer')
    </body>
</html>

