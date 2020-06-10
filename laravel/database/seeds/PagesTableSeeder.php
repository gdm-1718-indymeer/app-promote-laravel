<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 0,
                'title' => 'Hello World',
                'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
                'body' => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'image' => 'pages/page1.jpg',
                'slug' => 'hello-world',
                'meta_description' => 'Yar Meta Description',
                'meta_keywords' => 'Keyword1, Keyword2',
                'status' => 'ACTIVE',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
                'body_section' => NULL,
                'body_extra' => NULL,
                'pagination' => NULL,
                'body_header' => NULL,
                'header_big' => 0,
                'header_small' => 0,
                'show_contact' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 1,
                'title' => 'Home',
                'excerpt' => 'home text',
                'body' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'image' => NULL,
                'slug' => 'home',
                'meta_description' => 'home',
                'meta_keywords' => 'home',
                'status' => 'ACTIVE',
                'created_at' => '2020-06-07 16:28:26',
                'updated_at' => '2020-06-09 18:11:55',
                'body_section' => '<h2>WHY YOU’LL LOVE IT</h2>
<p>Shazam will identify any song in seconds. Discover, artists, lyrics, videos & playlists, all for free. Over 1 billion installs and counting. <br>
“Shazam is an app that feels like magic” - Techradar.com (http://techradar.com/) <br>
“Shazam is a gift... a game changer” - Pharrell Williams, GQ interview .</p><br>
<b> Are you also in love? Feel free to donate with the button below</b>',
                'body_extra' => '<!-- Start about Area -->
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/desktop_mac.png" alt="">
</div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>
Shazam for macOS
</h1>
<p>
Teach your Mac a few new tricks. <br>
Discover, buy and share your favorite music and TV right on your computer, with a personalized playlist created as you go.
</p>
</div>
<div class="col-lg-6 home-about-right home-about-right2">
<h1>
Shazam Lite for Android
</h1>
<p>
Our leanest app ever! <br>

You can now identify all the music that you want with our less than 1MB to download app. You can also Shazam music while offline, save your most recent results and share results with your friends - all regardless of network coverage.
</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
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
<div class="buttons dark flex-row d-flex">
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
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/lite_android.png"  style="width:350px; margin-left: 20%;" alt="">
</div>
</div>
</div>
</section>
<!-- End about Area -->',
                'pagination' => NULL,
                'body_header' => '<div class="row fullscreen d-flex align-items-center justify-content-between">
<div class="home-banner-content col-lg-6 col-md-6">
<h1>
Name any song<br>  in seconds
</h1>
<p>Shazam will identify any music playing around you.</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<i class="fa fa-apple" aria-hidden="true"></i>
<div class="desc">
<a href="https://apps.apple.com/be/app/shazam/id897118787?mt=12" target="blank">
<p>
<span>Available</span> <br>
on App Store
</p>
</a>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<i class="fa fa-android" aria-hidden="true"></i>
<div class="desc">
<a href="https://play.google.com/store/apps/details?id=com.shazam.android&hl=en" target="blank">
<p>
<span>Available</span> <br>
on Play Store
</p>
</a>
</div>
</div>
</div>
</div>
<div class="banner-img col-lg-6 col-md-6">
<img class="img-fluid" src="/storage/img/devices.png" alt="">
</div>
</div>

<!-- Start fact Area -->
<section class="fact-area">
<div class="container">
<div class="fact-box">
<div class="row align-items-center">
<div class="col single-fact">
<h2>100K+</h2>
<p>Total Downloads</p>
</div>
<div class="col single-fact">
<h2>10K+</h2>
<p>Positive Reviews</p>
</div>
<div class="col single-fact">
<h2>50K+</h2>
<p>Daily Visitors</p>
</div>
<div class="col single-fact">
<h2>0.02%</h2>
<p>Uninstallation Rate</p>
</div>
<div class="col single-fact">
<h2>15K+</h2>
<p>Pro User</p>
</div>
</div>
</div>
</div>
</section>
<!-- End fact Area -->',
                'header_big' => 0,
                'header_small' => 0,
                'show_contact' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 1,
                'title' => 'Blog page',
                'excerpt' => 'Stay up to date with the latest news!',
                'body' => '',
                'image' => 'pages/June2020/QssihpLJRuMn79Tk6S2w.jpg',
                'slug' => 'blog',
                'meta_description' => 'blog',
                'meta_keywords' => 'blog',
                'status' => 'ACTIVE',
                'created_at' => '2020-06-07 16:32:37',
                'updated_at' => '2020-06-08 16:12:33',
                'body_section' => '',
                'body_extra' => '',
                'pagination' => 12,
                'body_header' => '',
                'header_big' => 0,
                'header_small' => 1,
                'show_contact' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'author_id' => 1,
                'title' => 'Donations',
                'excerpt' => 'Welcome to the hall of fame with people who donated and supported us.',
                'body' => '',
                'image' => 'pages/June2020/ij9fkOEw7qKVghatVPhJ.jpg',
                'slug' => 'donates',
                'meta_description' => 'donates',
                'meta_keywords' => 'donates',
                'status' => 'ACTIVE',
                'created_at' => '2020-06-07 16:35:31',
                'updated_at' => '2020-06-08 16:13:49',
                'body_section' => '',
                'body_extra' => '',
                'pagination' => 5,
                'body_header' => '',
                'header_big' => 1,
                'header_small' => 0,
                'show_contact' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'author_id' => 1,
                'title' => 'Contact us',
                'excerpt' => 'We\'re here to help and answer any questions you might have. We look forward to hearing from you 🙂',
                'body' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'image' => 'pages/June2020/2jF7EXf2KJI4Ua9KHe75.png',
                'slug' => 'contact',
                'meta_description' => 'contact',
                'meta_keywords' => 'contact',
                'status' => 'ACTIVE',
                'created_at' => '2020-06-07 16:38:01',
                'updated_at' => '2020-06-09 01:05:50',
                'body_section' => '',
                'body_extra' => '',
                'pagination' => NULL,
                'body_header' => '',
                'header_big' => 1,
                'header_small' => 0,
                'show_contact' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'author_id' => 1,
                'title' => 'Privacy Policy',
                'excerpt' => '',
                'body' => '<div class="page-body">
<h2 class="mb-4" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-weight: 500; line-height: 1.2; font-size: 40px; font-family: \'Playfair Display\', serif; color: #080e1b; letter-spacing: -1px; caret-color: #080e1b; text-align: justify;">Privacy Policy</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam respects the privacy of all customers and users of our websites. We ensure that the personal information you provide is treated confidentially.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">This privacy statement applies exclusively to the services of Vintage Expert. You should be aware that Shazam is not responsible for the privacy practices of other sites, which can be accessed via a link on our website. We advise you to always consult the privacy statements and disclaimers of those other websites when approaching third party websites via our website. You can see that you are no longer on our website if the URL in the address bar has changed.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam may process personal data by using its services, and/or because you provide these yourself when filling in a contact form on this website.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">The following personal data will be processed when using the contact form:&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Your e-mail address: optionally your name, address and place of residence and optionally your telephone number.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WHY ARE THESE DETAILS NECESSARY?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam processes your personal data in order to be able to contact you in writing (by e-mail) within the framework of the execution of an assignment agreement concluded with you or, for example, to be able to contact you by telephone if you so request.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">HOW LONG ARE DATA STORED?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam stores your personal data no longer than is strictly necessary to achieve the goals for which your data are collected. Your data will not be stored for longer than three months if no agreement is made with you or if an existing agreement is terminated.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WILL YOUR DATA BE SHARED?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam will not share your personal information with third parties without your consent, unless we are required to do so by law or court order.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">MAPPING WEBSITE VISITS&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam uses Google Analytics to track how visitors use this website. Google does not have permission to use the Analytics information obtained for other Google services and the IP addresses are anonymized.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">VIEW, MODIFY OR DELETE DATA&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">You have the right to access, correct or delete your personal data at any time. You can send a request for inspection, correction or deletion to info@Shazam.be.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">We will respond to your request as soon as possible, but at least within four weeks.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">SECURITY&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam takes the protection of your data very seriously and takes appropriate measures to prevent misuse, loss, unauthorized access, unwanted disclosure and unauthorized modification. If you have the impression that your information is not properly secured or there are indications of misuse, or if you would like more information about the security of personal information collected by us, please contact the Personal Data Authority.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">COOKIES&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Cookies are simple, small text files that are stored on the hard disk or in the memory of your computer. Cookies cannot damage your computer or the files on your computer.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Cookies have two functions. On the one hand, they help to make navigating a website easier by remembering, for example, login names, passwords and (language) preferences. On the other hand, there are cookies that assess your interests based on the websites you visit. These cookies do not contain any personal data, they only remember your preferences and interests, based on your surfing behaviour.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam may place cookies for the following purposes:&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- To store your preferences;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- to analyze the use of this website;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- to optimize this website;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- to place more targeted information on this website;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- to collect information about visitors to this website;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">The cookies that remember your preferences and make navigating Shazam easier can be turned off in your browser settings. If you disable these cookies, you will not be able to use all features of the website, or will be able to use them more easily.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'image' => NULL,
                'slug' => 'privacy-policy',
                'meta_description' => 'privacy',
                'meta_keywords' => 'privacy',
                'status' => 'ACTIVE',
                'created_at' => '2020-06-08 13:58:51',
                'updated_at' => '2020-06-09 18:27:28',
                'body_section' => '',
                'body_extra' => '',
                'pagination' => NULL,
                'body_header' => '',
                'header_big' => 0,
                'header_small' => 1,
                'show_contact' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'author_id' => 1,
                'title' => 'About',
                'excerpt' => 'about page',
                'body' => '<p>&nbsp;</p>
<!-- Start about Area -->
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left"><img class="img-fluid" src="/storage/pages/June2020/nathan-dumlao-qnH_Sh0W86E-unsplash.jpg" alt="" width="1800" height="2700" /></div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>Our mission is to help people recognize and engage with the world around them</h1>
<p>Shazam is a mobile app that recognises music and TV around you. It is the best way to discover, explore and share the music and TV you love. Shazam connects more than 1 billion people. It took us 10 years to reach 1 billion tags, 10 months to reach 2 billion, 3 months to go from 10 to 12 billion... It\'s an amazing app, available now in the Apple and Android stores. And we\'re always looking for new and innovative ways to delight our users.</p>
</div>
</div>
</div>
</section>
<!-- End about Area -->
<p>&nbsp;</p>
<!-- Start feature Area -->
<section class="feature-area section-gap-top">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-lg-6">
<div class="section-title text-center">
<h2>HOW DOES SHAZAM WORK?</h2>
<p><span style="caret-color: #242424; color: #242424; font-family: Roboto, Arial, sans-serif; text-align: center;">This is a question we get often asked. Here is a quick summary of the three main steps involved from the moment you Shazam until the magic happens.</span></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Tap the shazam button</h3>
<p>Let\'s say you are in a shop and you like the music you\'re hearing. Start the app and tap the Shazam button.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Digital fingerprint</h3>
<p>A digital fingerprint of the audio is created and, within seconds, matched against Shazam\'s database of millions of tracks and TV shows.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Enjoy</h3>
<p>You are then given the name of the track and the artist and information such as lyrics, video, artist biography, concert tickets and recommended tracks.</p>
</div>
</div>
</div>
</div>
</section>
<!-- End feature Area -->
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'image' => 'pages/June2020/HHIz9zewDFdYfOQjoP73.png',
                'slug' => 'about',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2020-06-08 15:33:13',
                'updated_at' => '2020-06-09 21:13:55',
                'body_section' => '',
                'body_extra' => '',
                'pagination' => NULL,
                'body_header' => '',
                'header_big' => 1,
                'header_small' => 0,
                'show_contact' => 1,
            ),
        ));
        
        
    }
}