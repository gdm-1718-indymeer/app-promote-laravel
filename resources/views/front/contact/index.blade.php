
@extends('layouts.layout')
@section('title', $page->getTranslatedAttribute('title', $locale))

@section('content')
@include('components.header')

@component('front.contact.component',
[
'page' => $page
])
@endcomponent


@endsection

