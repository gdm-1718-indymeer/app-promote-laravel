@include('partials.header')

@extends('layout')

@section('content')
{{-- Breadcrumbs::render('page',$page) --}}
{!! $page->body !!}


@endsection

