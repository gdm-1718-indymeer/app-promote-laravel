
@extends('layouts.layout')

@section('title', $page->getTranslatedAttribute('title', $locale))

@section('content')

@include('components.headerToggle')
<section>
    <h2> Also want to donate? </h2>
    @include('components.donateBtn');
</section>
<div class="container">
    <section class="row cards flex flex-wrap">
            @foreach ($donates as $pay)
                @component('front.donates.component', [
                'pay' => $pay
                ])
                @endcomponent
            @endforeach
    </section>

    <div class="d-flex justify-content-center">
        {{ $donates->links() }}
    </div>
    
</div>




@endsection

