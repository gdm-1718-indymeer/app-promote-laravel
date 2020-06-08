
			<main role="main">
				<button class="btn-hover color-4 popup-trigger" id="popup-trigger">DONATE NOW</button>

			  </main>
			  <div class="overlay" id="overlay">
				<div class="overlay-background" id="overlay-background"></div>
				<div class="overlay-content" id="overlay-content">
				  <div class="fa fa-times fa-lg overlay-close" id="overlay-close"></div>
				  <h1 class="main-heading">Signup Now</h1>
                  <h3 class="blurb">Creating an account is free &mdash;</h3><span class="blurb-tagline">and won't take longer than a couple of seconds.</span>
                  
				  <form class="signup-form" action="{{ url('payment') }}" method="post" >
					@csrf
					<label for="signup-name">Full Name</label>
					<input id="signup-name" type="text" name="name" autocomplete="off"/>
					<label for="signup-email">Email Address</label>
					<input id="signup-email" type="email" name="email" autocomplete="off"/>
					<label for="signup-number">Amount of donation</label>
					<input id="signup-number" type="number" name="number"  min="10"autocomplete="off"/>
					<label for="signup-message">Message</label>
					<input id="signup-message" type="text" name="message" required autocomplete="off"/>
					<input type="hidden" name="public" value="0" />
					<input style="width:6%; height:15px; " type="checkbox" name="public" value='1'>
					<label for="checkbox"> Do you want this message public?</label>
					<button class="btn btn-outline submit-btn"><span>signup</span></button>
				  </form>
				</div>
			  </div>
			