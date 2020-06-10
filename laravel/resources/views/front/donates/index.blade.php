
@extends('layouts.layout')

@section('title', $page->getTranslatedAttribute('title', $locale))

@section('content')

@include('components.headerToggle')
<div class="container">
<section class="donates_intro">
        <h2>@lang('donate.header')</h2>
        @include('components.donateBtn')
    </section>
</div>
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

