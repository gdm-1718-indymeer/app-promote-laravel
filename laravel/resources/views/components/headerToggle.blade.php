 <!-- Check if big header or small header is toggled in page option --> 

@if($page->header_big == 1 && $page->header_small == 0 )
    @include('components.header')
@elseif($page->header_small == 1 && $page->header_big == 0 )
    @include('components.lowHeader')
@endif
