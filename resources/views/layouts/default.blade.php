<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>
<body>
    <main class="main-wrapper"> 
        
        @include('partials.header')

        <div class="content-wrapper oh">
        
            @yield('content')

        </div>
        
        <footer class="row">
            @include('partials.footer')
        </footer>
        <div id="back-to-top">
            <a href="#top"><i class="voyager-angle-up"></i></a>
        </div>
    </main>

    <!-- jQuery Scripts -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    
</body>
</html>