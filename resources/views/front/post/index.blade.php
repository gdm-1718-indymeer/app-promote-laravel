
@extends('layouts.layout')

@section('title', 'posts')

@section('content')
<div class="header-banner">
    <h1>Berichten</h1>
</div>
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

