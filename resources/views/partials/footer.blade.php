
	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Shazam</h4>
					<img src=" {{ setting('site.logo') }}" width="100px" >
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
				{{menu('posts')}}				
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Contact</h4>
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="{{ url('newsletter') }}" method="post" class="form-inline">
							{{ csrf_field() }}

							
                                <input class="form-control" placeholder="Your Email Address" type="email" name="user_email" id="exampleInputEmail" class="form-control">
                          
                            <button class="click-btn btn btn-default"><i class="fa fa-chevron-right"></i></button>
                            <div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>
                            <div class="info"></div>

                        </form>

					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-6 col-md-12"> made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Indy Meermans</p>
				<div class="col-lg-6 col-md-6 social-link">
					<div class="download-button d-flex flex-row justify-content-end">
						<div class="buttons gray flex-row d-flex">
							<i class="fa fa-apple" aria-hidden="true"></i>
							<div class="desc">
								<a href="https://apps.apple.com/be/app/shazam/id897118787?mt=12">
									<p>
										<span>Available</span> <br>
										on App Store
									</p>
								</a>
							</div>
						</div>
						<div class="buttons gray flex-row d-flex">
							<i class="fa fa-android" aria-hidden="true"></i>
							<div class="desc">
								<a href="https://play.google.com/store/apps/details?id=com.shazam.android&hl=en">
									<p>
										<span>Available</span> <br>
										on Play Store
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <!-- End Footer Area -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="/js/custom-scripts.js"></script>

</body>

</html>