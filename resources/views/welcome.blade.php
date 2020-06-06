@extends('layouts.layout')

@section('title', 'home')

@section('content')

@component('front.home.banner',  [
	'page' => $page
])
@endcomponent

@component('front.home.mid',[
	'page' => $page
])
@endcomponent

@component('front.home.end', [
	'page' => $page
])
@endcomponent

@endsection

	
