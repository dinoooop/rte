<?php
/**
 *
 * Template Name: Contact Template
 */
get_header(); ?>



<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">First Name*</label>
										<input type="text" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Last Name*</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Subject</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Message*</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button class="button contact_button"><span>Send Message</span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Address</div>
							<ul>
								<li>International Trading Enterprises</li>
								<li>Block I, Al Hayl Industrial Area, Fujairah, United Arab Emirates</li>
								<br />
								<li>Landline: <span>+971 9  2225516</span></li>
								<li>Fax: <span>+971 9 2225516</span></li>
								<li>Email: <span><a href="mailto:sales@iteuae.com">sales@iteuae.com</a></span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Shippiing & Returns</div>
							<ul>
								<li>Phone: <span>+53 345 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Phone: <span>+53 345 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						
								<div id="google-map-area-54994f694b31d" style="width: 100%; height: 500px;"></div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<script>
    function google_maps_54994f694b31d() {
        var latlng = new google.maps.LatLng(25.0826878,56.2876393);
        var myOptions = {zoom: 19, center: latlng, mapTypeId: google.maps.MapTypeId.ROADMAP, zoomControl: true, mapTypeControl: false, streetViewControl: false, scrollwheel: false};
        var map = new google.maps.Map(document.getElementById("google-map-area-54994f694b31d"), myOptions);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: 'http://www.padstowkitchengarden.co.uk/wp-content/themes/padstow/images/map-marker.png',
        });

        map.set('styles', [
            {featureType: 'road', elementType: 'geometry', stylers: [{color: '#000000'}, {weight: 1.6}]},
            {featureType: 'water', stylers: [{color: "#46bcec"}, {visibility: "on"}]}]
                );
    }
    jQuery(document).ready(function ($) {
        google_maps_54994f694b31d();
    });
</script>

	
	
<?php get_footer("page"); ?>