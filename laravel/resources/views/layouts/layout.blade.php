@include('partials.header',  ['locale' => $locale])


<div class="content">
    @yield('content')
</div>



@include('partials.footer')
