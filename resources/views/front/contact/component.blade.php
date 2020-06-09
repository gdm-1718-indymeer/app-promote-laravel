


    <div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
                <form class="contact2-form validate-form" action="{{ url('/contact') }}" method="POST">
                    @csrf
					<span class="contact2-form-title">
						@lang('contact.contact')
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="@lang('contact.name')"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="@lang('contact.email')"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="content"></textarea>
						<span class="focus-input2" data-placeholder="@lang('contact.message')"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								@lang('contact.send')
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
