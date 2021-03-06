<!-- start banner Area -->
<section class="home_banner_area blog_banner">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay_header bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" style="background-image:url({{  Voyager::image($page->image) }});"></div>
        <div class="container">
            <div class="blog_b_text text-center">
                <h2 class="text-white">{{ $page->getTranslatedAttribute('title', $locale)}}</h2>
                <p>{{ $page->getTranslatedAttribute('excerpt', $locale) }}</p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->