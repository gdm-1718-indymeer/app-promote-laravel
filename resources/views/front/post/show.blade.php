@extends('layouts.layout')
@section('title', $post->title)


@section('content')
@include('components.headerToggle')

	<div class="container">
		<div class="blogShow">
			<div class="row">
				<div class=" col-md-offset-2" style="width: 100%">

					<h1>{{ $post->getTranslatedAttribute('title', $locale) }}</h1>
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<p>{!! $post->getTranslatedAttribute('body', $locale) !!}</p>

				</div>
			</div>
		</div>
	</div>

@endsection()