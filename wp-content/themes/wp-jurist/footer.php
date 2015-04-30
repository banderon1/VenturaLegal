<style type="text/css">
.map-container-footer{
  background: #27201D;
  color: #fff;
}
.map-container-footer a{ color:inherit; }
.map-container-footer .row {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.map-container-footer .col-sm-3 { padding:15px; }
@media (min-width: 768px) {
  .map-container-footer .row {width:750px}
  .map-container-footer .col-sm-3 {
    display: inline-table;
    -webkit-box-sizing: border-box; // Android < 2.3, iOS < 4
     -moz-box-sizing: border-box;
          box-sizing: border-box; // Chrome, IE 8+, Opera, Safari 5.1
  }
}
</style>
        <div class="map-container-footer">
            <div class="row widget-container">
                <section class="col-sm-3 widget widget_roots_vcard-2 widget_roots_vcard" style="">
                    <p class="vcard" itemscope="" itemtype="http://schema.org/Attorney">
			<br/>
                        <a class="fn org url" href="/">
                            <span itemprop="name"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) );  ?></span>
                        </a><br>
                        <span class="adr" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span class="street-address" itemprop="streetAddress">4732 Telephone Rd Suite E</span><br>
                            <span class="locality" itemprop="addressLocality">Ventura</span>,
                            <span class="region" itemprop="addressRegion">CA</span>
                            <span class="postal-code">93003</span><br>
                        </span>
                        <span class="tel" itemprop="telephone"><a class="value" href="tel:805-650-8900">(805) 650-8900</a></span><br>
                        <a class="email" href="mailto:akaventuralawyer@gmail.com">akaventuralawyer@gmail.com</a>
                    </p>
                </section>
                <section class="col-sm-3 widget googlemapswidget-3 google-maps-widget">
                    <h3>Map</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.4780353095225!2d-119.23108524732972!3d34.26186028258908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e84d19c7c23ba7%3A0x5d8eafc357065e4b!2sMichael+Christiano+Law+Offices!5e0!3m2!1sen!2sus!4v1430423043799" width="400" height="300" frameborder="0" style="border:0"></iframe>
                </section>
            </div>
        </div>

	</div><!-- #container -->

	<div class="push"></div>

</div><!-- #wrapper -->

<footer id="colophon" role="contentinfo">
    <div id="site-generator">

        <?php echo __('&copy; ', 'wp-jurist') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
        <?php wp_jurist_footer_nav(); ?>
        
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
