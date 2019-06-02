<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">

			<div class="col-md-8 text-left">
				<div class="site-info">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div><!-- .site-info -->
			</div>
			<!-- /.col-md-12 text-center -->

			<div class="col-md-4 text-right">
				<div class="site-info">
					<p>2019 © testbox</p>
				</div><!-- .site-info -->
			</div>
			<!-- /.col-md-12 text-center -->

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</footer><!-- #colophon -->
