
@extends('layouts.layout')

@section('content')

@include('components.headerToggle')

<div class="container ">
    {!! $page->getTranslatedAttribute('body', $locale) !!}
</div>

 <!-- Check if show contact is toggled in page option -->
@if($page->show_contact == 1)
    @include('front.contact.component',
    [
    'page' => $page
    ])
@endif

@endsection

