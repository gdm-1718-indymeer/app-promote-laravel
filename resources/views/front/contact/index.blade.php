
@extends('layouts.layout')
@section('title', $page->title)

@section('content')
@include('components.header')

@component('front.contact.component',
[
'page' => $page
])
@endcomponent


@endsection

