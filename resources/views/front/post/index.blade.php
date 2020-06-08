
@extends('layouts.layout')

@section('title', 'posts')

@section('content')
@include('components.headerToggle')

<div class="container">
    <section class="row cards flex flex-wrap">
        @foreach ($posts as $post)
            @component('front.post.component', [
            'post' => $post
            ])
            @endcomponent
        @endforeach
    </section>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    
</div>


@endsection

