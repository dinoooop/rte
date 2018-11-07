<?php
/**
 *
 * Template Name: Contact Template
 */
get_header(); ?>



<!-- Contact -->
	
	<div class="sdt-page">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_form_container">
							<?php echo do_shortcode('[contact-form-7 id="23" title="main contact"]'); ?>
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
        var latlng = new google.maps.LatLng(25.082507,56.2890828);
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