<?php get_header();
/* Template name: Kontakt strana */
?>


<div class="page-section sk-top-page-content">
	<div class="container">
		<div class="row text-center align-items-center">
			<div class="col-lg-4 py-3">
				<div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
				<p class="mb-3 font-weight-medium text-lg">Adresa</p>
				<p class="mb-0 text-secondary">Stevana Nemanje 198, Novi Pazar 36300, Republika Srbija</p>
			</div>
			<div class="col-lg-4 py-3">
				<div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
				<p class="mb-3 font-weight-medium text-lg">Telefon</p>
				<p class="mb-0"><a href="#" class="text-secondary">+381 655555555</a></p>
				<p class="mb-0"><a href="#" class="text-secondary">+020 121212121</a></p>
			</div>
			<div class="col-lg-4 py-3">
				<div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
				<p class="mb-3 font-weight-medium text-lg">Email Adresa</p>
				<p class="mb-0"><a href="#" class="text-secondary">akamx@gmail.com</a></p>
				<p class="mb-0"><a href="#" class="text-secondary">ankica@gmail.com</a></p>
			</div>
		</div>
	</div>

	<div class="container mt-4">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
			</div>
			<div class="col-lg-6 px-0">
				<div class="maps-container">
					<div id="google-maps">
						<iframe 
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d727.7331631284019!2d20.520793899999997!3d43.147943500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4756286ec67f306f%3A0x53ce6678f49e2777!2sStevana%20Nemanje%20198%2C%20Novi%20Pazar%2036300!5e0!3m2!1sen!2srs!4v1653155733150!5m2!1sen!2srs"
							width="100%" 
							height="100%"
							style="border:0;" 
							allowfullscreen="" 
							loading="lazy" 
							referrerpolicy="no-referrer-when-downgrade"
							>
						</iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End ection 1 -->
</div>

<?php get_footer(); ?>