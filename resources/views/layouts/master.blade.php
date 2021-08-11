<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
<title>News API | @yield('title')</title>
</head>
<body>
    <!-- Header -->
    <header class="banner-ad" id="header">
        {{-- @include('includes.header') --}}

    </header>
    <!-- Navigation -->
    @include('includes.navbar')
    <!-- Main Section -->
    <main>
        @yield('content')
    </main>
    <!-- Footer Section -->
    @include('includes.footer')

    <!-- Jquery Library File -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- Owl caousel Javascript File -->

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    <!--Custom Javascript File -->
    <script type="text/javascript" src="{{ asset('js/news_api.main.js') }}"></script>
    @yield('scripts')
</body>
</html>