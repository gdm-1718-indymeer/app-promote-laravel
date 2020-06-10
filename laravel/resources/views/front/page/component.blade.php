{{-- @can('edit', $page)
<a href="/admin/pages/{{$page->id}}/edit" title="Edit" class="btn btn-primary float-right edit">
<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
</a>
@endcan --}}
@switch($view)
@case('full')
<h1>{{$page->title}}</h1>
@isset($page->image)
<img class="rounded img-fluid float-right" src="{{Voyager::image($page->thumbnail('small'))}}" />
@endisset<div class="body clearfix">
    {!! $page->body !!}
</div>
@break
@case('frontpage')
<div class="jumbotron rounded-0">
    <h2 class="display-4 text-break">{{$page->title}}</h2>

    @isset($page->image)
    <img class="img-fluid float-right" src="{{Voyager::image($page->thumbnail('small'))}}" />
    @endisset<div class="body clearfix">
        {!! $page->body !!}
    </div>
</div>
@break
@default

<p>Unspecified view</p>
@endswitch
