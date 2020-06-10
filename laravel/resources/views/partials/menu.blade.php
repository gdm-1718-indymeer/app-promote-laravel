
    <header id="header">
        <div class='navbar' title='Menu'>
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M284.3 256L506.1 34.1c7.8-7.8 7.8-20.5 0-28.3 -7.8-7.8-20.5-7.8-28.3 0L256 227.7 34.1 5.9c-7.8-7.8-20.5-7.8-28.3 0 -7.8 7.8-7.8 20.5 0 28.3l221.9 221.9L5.9 477.9c-7.8 7.8-7.8 20.5 0 28.3 3.9 3.9 9 5.9 14.1 5.9 5.1 0 10.2-2 14.1-5.9L256 284.3l221.9 221.9c3.9 3.9 9 5.9 14.1 5.9s10.2-2 14.1-5.9c7.8-7.8 7.8-20.5 0-28.3L284.3 256z"/></svg>        
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
<!-- Right Side Of Navbar | Languages  -->
<ul class="language">
    @foreach (config('voyager.multilingual.locales') as $locale)
        <li class="breadcrumb-item">
            <a class=""
               href="{{ url($locale, Request::segment(2)) }}"
                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
        </li>
    @endforeach
</ul>
</header>
    