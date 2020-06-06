@extends('layouts.layout')
@section('title', $post->title)


@section('content')

<div class="header-banner">
    <h1>Berichten</h1>
</div>
	<div class="container">
		<div class="blogShow">
			<div class="row">
				<div class=" col-md-offset-2" style="width: 100%">

					<h1>{{ $post->title }}</h1>
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<p>{!! $post->body !!}</p>

				</div>
			</div>
		</div>
	</div>

@endsection()