
@extends('layouts.layout')
@section('title', $page->title)

@section('content')

@component('front.contact.component',
[
'page' => $page
])
@endcomponent


@endsection

