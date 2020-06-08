
@extends('layouts.layout')

@section('content')

@include('components.headerToggle')
{{-- Breadcrumbs::render('page',$page) --}}
<div class="container ">
    {!! $page->body !!}
   
</div>

@if($page->show_contact == 1)
    @include('front.contact.component',
    [
    'page' => $page
    ])
@endif

@endsection

