@extends('layouts.layout', ['locale' => $locale])

@section('title', 'home')

@section('content')

@component('front.home.banner',  [
	'page' => $page,
	'locale' => $locale
])
@endcomponent

@component('front.home.mid',[
	'page' => $page,
	'locale' => $locale

])
@endcomponent

@component('front.home.end', [
	'page' => $page,
	'locale' => $locale

])
@endcomponent

@endsection

	
