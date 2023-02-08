<footer class="page-footer bg-image" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/img/world_pattern.svg);">
	<div class="container">
		<div class="row mb-5">

			<div class="col-lg-3 footer-logo">
				<a href="/" class="navbar-brand"><img class="py-3" src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>

				<p>Šta Vi osećate kada Vam računovođa donese finansijski izveštaj?
Ukoliko osećate paniku podhitno menjajte taktiku.</p>

				<div class="social-media-button">
					<a href="https://www.facebook.com/ankica.ivanovic.5249"><span class="mai-logo-facebook-f"></span></a>
					<a href="#"><span class="mai-logo-google-plus-g"></span></a>
					<a href="https://www.instagram.com/akamax.rs/"><span class="mai-logo-instagram"></span></a>
					<a href="https://www.linkedin.com/in/ankica-ivanovi%C4%87-3731a7a4/"><span class="mai-logo-linkedin"></span></a>
				</div>
			</div>
			<div class="col-lg-3 py-3">
				<h5>Meni</h5>
				<ul class="footer-menu">
					<li><a href="/">Početna</a></li>
					<li><a href="/o-nama">O nama</a></li>
					<li><a href="/usluge-2">Usluge</a></li>
					<li><a href="/blog-2">Blog</a></li>
					<li><a href="/kontakt">Kontakt</a></li>
				</ul>
			</div>
			<div class="col-lg-3 py-3">
				<h5>Kontaktirajte nas</h5>
				<p>Novi Pazar Stevana Nemanje bb</p>
				<a href="#" class="footer-link">+00 1122 3344 5566</a>
				<a href="#" class="footer-link">akamax@gmail.com</a>
			</div>
			<div class="col-lg-3 py-3">
				<h5>Newsletter</h5>
				<p>Dobijajte ažuriranja, vesti ili događaje na svoju poštu..</p>

				<?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]') ?>

				<!-- <form action="#">
					<input type="text" class="form-control" placeholder="Unesite svoj email...">
					<button type="submit" class="btn btn-success btn-block mt-2">Pretplatiti se</button>
				</form> -->
			</div>
		</div>

		<p class="text-center" id="copyright">Copyright &copy; <?php echo date('Y'); ?>. Sva prava zadržana. Izrada by <a href="http://stefkari.dx.am/" target="_blank">Stef</a></p>
	</div>
</footer>
<?php wp_footer(); ?>

<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo bloginfo('template_directory'); ?>/js/google-maps.js"></script>

<script src="<?php echo bloginfo('template_directory');?>/js/jquery.flexslider-min.js"></script>

<script src="<?php echo bloginfo('template_directory'); ?>/vendor/wow/wow.min.js"></script>

<script src="<?php echo bloginfo('template_directory'); ?>/js/theme.js"></script>

<script src="<?php echo bloginfo('template_directory');?>/js/custom.js"></script>

<script src="<?php echo bloginfo('template_directory');?>/js/cookieconsent.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>


</html>