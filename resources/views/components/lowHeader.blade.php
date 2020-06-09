<div class="header-banner" style="background-image:url({{  Voyager::image($page->image) }});">
    <h1>{{ $page->getTranslatedAttribute('title', $locale) }}</h1>
    <p>{{ $page->getTranslatedAttribute('excerpt', $locale) }}</p>
</div>