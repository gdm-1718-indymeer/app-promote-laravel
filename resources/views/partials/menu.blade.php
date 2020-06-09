
    <header id="header">
        <div class='navbar' title='Menu'>
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>

        <div id="navigationWrap">
            <div class="container menu">
            <nav class="overlay-menu">
                <ul>
                    
    @php
    
        if (Voyager::translatable($items)) {
            $items = $items->load('translations');
            
        }
      
    @endphp
    
    @foreach ($items as $item)
    
        @php
    
            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }
    
            $isActive = null;
            $styles = null;
            $icon = null;
    
            // Background Color or Color
            if (isset($options->color) && $options->color == true) {
                $styles = 'color:'.$item->color;
            }
            if (isset($options->background) && $options->background == true) {
                $styles = 'background-color:'.$item->color;
            }
    
            // Check if link is current
            if(url($item->link()) == url()->current()){
                $isActive = 'active';
            }
    
            // Set Icon
            if(isset($options->icon) && $options->icon == true){
                $icon = '<i class="' . $item->icon_class . '"></i>';
            }
    
        @endphp
        
          
        <li class="{{ $isActive }} mr-6">
            <a href="{{ url(app()->getLocale() . $item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
                {!! $icon !!}
                <span>{{ $item->title }}</span>
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])
            @endif
        </li>
        
    @endforeach

        <li class="mr-6"><a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </li>
    </ul>
</nav>
<div class="social">
    <a href="#"><i class="fa fa-codepen" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
</div>
</div>
</div>
<!-- Right Side Of Navbar -->
<ul class="language">
    @foreach (config('voyager.multilingual.locales') as $locale)
        <li class="breadcrumb-item">
            <a class=""
               href="{{ url($locale,Request::segment(count(Request::segments()))) }}"
                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
        </li>
    @endforeach
</ul>
</header>
    