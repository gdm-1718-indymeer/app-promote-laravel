	<!-- Start feature Area -->
	<section class="feature-area section-gap-top">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-9">
					<div class="section-title text-center">
                        {!! $page->getTranslatedAttribute('body_section', $locale) !!}
					</div>
				</div>
			</div>

            @include('components.donateBtn')
		</div>
	</section>
	
<!-- End Feature Area -->
