<?php
/**
 * Template Name: contact Static Page
 *
 * The template for homepage
 *
 */
?>
<?php include('contact_us.php'); ?>
<div class="full-contenar">
<div class="testimonial">
		<div class="testimonial-section">
			<h1>Get In Touch</h1>
			<div class="testimonial-area">
				<form method="post" action="contact_us.php">
						<div class="testimonial-form">
							<input type="text" name="contact_name" class="form_control" placeholder="Name" minlength="3">
						</div>
						<div class="testimonial-form">
							<input type="email" name="contact_email" class="form-control" placeholder="Email">
						</div>
						<div class="testimonial-form">
							<input type="number" name="phone_number" class="form-control" placeholder="Contact Number">
						</div>
						<div class="testimonial-form">
							<input type="text" name="Purpose" class="form-control" placeholder="Purpose">
						</div>
						<div class="testimonial-form">
							<input type="text" name="contry" class="form-control" placeholder="Contry Name">
						</div>
						<div class="testimonial-form">
							<input type="text" name="city" class="form-control" placeholder="City Name">
						</div>
						<div class="testimonial-forms">
						    <textarea name="contact_message" class="form-control" placeholder="How can we help you?" rows="6"></textarea>
						</div>
						
						<input type="submit" name="submit">
						
				</form>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>