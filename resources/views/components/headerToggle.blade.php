@if($page->header_big == 1 && $page->header_small == 0 )
    @include('components.header')
@elseif($page->header_small == 1 && $page->header_big == 0 )
    @include('components.lowHeader')
@endif
