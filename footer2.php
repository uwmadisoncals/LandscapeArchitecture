<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="ieFooter">
		<div class="inner">
			<div id="pre-footer">
			<div class="linksContainer">
			<h3>Resources</h3>
        	<ul id="quick_links">
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
       	      </li>
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>
            </li>

            </ul>
            <div class="clearfix"></div>
			</div>

			<div class="linksContainer right">
				<h3>Support</h3>
				<p>You can help support the Department of Landscape Architecture by making a gift to the
University of Wisconsin Foundation.</p>
				<a href="https://www.myuwconnect.org/give?id=467175B7-3EC6-48E5-853F-31A9B1285ED8" class="button blue">Make a Gift</a>
				<p class="address">Department of Landscape Architecture | 1450 Linden Drive | Madison, WI 53706 | 608.263.7301 | <a href="mailto:info@cals.wisc.edu">info@cals.wisc.edu</a></p>
			</div>
			<div class="clearfix"></div>
        </div>

        <div class="copyright">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/footercrest2.png" alt="University of Wisconsin Madison" align="center" />
        	<div>&copy;Copyright 2014 The Board of Regents of the University of Wisconsin System <a href="http://wisc.edu">University of Wisconsin-Madison</a></div>



        </div>
			
        <div class="socialRef">
			<a href="https://www.facebook.com/groups/UWMadisonLA" title="Like us on Facebook" class="facebook">Facebook</a>
			<?php
			/*		< a href="https://twitter.com/UWMadisonCALS" title="Follow Us on Twitter" class="twitter">Twitter</a>
			* <a href="http://www.flickr.com/photos/uwmadisoncals/" title="View our photostream" class="flickr">Flickr</a>
			* <a href="http://www.linkedin.com/groups?gid=5062996" class="linkedin">LinkedIn</a>
			* <a href="http://www.youtube.com/user/UWMadisonCALS" title="Our latest videos" class="youtube">Youtube</a>
			*/
		</div>
			<div class="clearfix"></div>
        </div>


			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */

					get_sidebar( 'footer' );
			?>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/min/master.min.js"></script>


</body>
</html>
