<aside>
    <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
    </ul>
</aside>

<body>
    @include('layouts.header')
    <div class="container">
        @include('layouts.sidebar')
        @yield('content')
    </div>
    @include('layouts.footer')
</body>