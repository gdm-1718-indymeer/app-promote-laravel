 <!-- Donate Button -->

			<main role="main">
				<button class="btn-hover color-4 popup-trigger" id="popup-trigger">@lang('donate.donate')</button>
			</main>

 <!-- Donate form with overlay -->

			  <div class="overlay" id="overlay">
				<div class="overlay-background" id="overlay-background"></div>
				<div class="overlay-content" id="overlay-content">
				  <div class="fa fa-times fa-lg overlay-close" id="overlay-close"></div>
				  <h1 class="main-heading">@lang('donate.donate')</h1>
                  <span class="blurb-tagline">@lang('donate.intro')</span>
                  
				  <form class="signup-form" action="{{ url('payment') }}" method="post" >
					@csrf
					<label for="signup-name">@lang('donate.name')</label>
					<input id="signup-name" type="text" name="name" autocomplete="off"/>
					<label for="signup-email">@lang('donate.email')</label>
					<input id="signup-email" type="email" name="email" autocomplete="off"/>
					<label for="signup-number">@lang('donate.amount')</label>
					<input id="signup-number" type="number" name="number"  min="10"autocomplete="off"/>
					<label for="signup-message">@lang('donate.message')</label>
					<input id="signup-message" type="text" name="message" required autocomplete="off"/>
					<input type="hidden" name="public" value="0" />
					<input style="width:6%; height:15px; " type="checkbox" name="public" value='1'>
					<label for="checkbox"> @lang('donate.public')</label>
					<button class="btn btn-outline submit-btn"><span>@lang('donate.send')</span></button>
				  </form>
				</div>
			  </div>
			