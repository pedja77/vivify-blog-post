
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.header')
    </head>
    <body>
        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">Laravel blog</h1>
                @if(auth()->check())
                    <div>{{  auth()->user()->name }}</div>
                    <a href="/logout">Logout</a>
                @else
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endif
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
                <div class="col-sm-3 offset-sm-1 blog-sidebar">
                    @include('partials.sidebar')
                </div>
            </div>
        </div>
        @include('partials.footer')
    </body>
</html>

