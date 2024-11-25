<?php get_header(); ?>

<section class="hero fullwidth flex vertical vertical__center horizontal__center">

	<div class="hero__background">

	</div>
	<div class="hero__content boxwidth">
		<h1>Your partner in digital
			transformation
		</h1>
		<a href="#" class="button">Get in touch</a>
		<object data="<?= IMAGES . 'star-1.svg' ?>" type="image/svg+xml" class="hero-icon">Star icon</object>

	</div>
</section>

<section class="about fullwidth flex vertical vertical__center">
	<div class="about__content boxwidth">
		<h2 class="show-on">Who We Are</h2>
		<p class="show-on__after">
			We’re a team of passionate web enthusiasts who love what we do. From creative designers to tech-savvy developers, our experts work together to build websites and apps that not only look great but also perform brilliantly. We stay on top of the latest trends and technologies to ensure your site is modern, secure, and easy to use. At Webvist, we turn visionary ideas into cutting-edge software solutions. Our team is passionate about technology and committed to excellence, partnering with businesses to drive innovation and success.
		</p>
	</div>
</section>


<section class="coop fullwidth flex vertical vertical__center">
	<div class="coop__content boxwidth">
		<div class="coop__content--header show-on">
			<h3>Some of our cooperation</h3>
			<object data="<?= IMAGES . 'star-2.svg' ?>" type="image/svg+xml" class="coop-icon">Cooperation icon</object>
		</div>

		<div class="coop__content--logos show-on__after">
			<?php for ($i = 1; $i <= 11; $i++) {
			?>
				<object data="<?= IMAGES . 'logo' . $i . '.svg' ?>" type="image/svg+xml">company logo</object>
			<?php
			} ?>
		</div>
	</div>
</section>

<section id="services" class="portfolio fullwidth flex vertical vertical__center show-on">
	<div class="portfolio__content boxwidth">
		<div class="portfolio-slider">
			<div><img src="<?= IMAGES . 'screenshot-2.webp' ?>" alt="Portfolio screenshot"></div>
			<div><img src="<?= IMAGES . 'screenshot-1.webp' ?>" alt="Portfolio screenshot"></div>
			<div><img src="<?= IMAGES . 'screenshot-3.webp' ?>" alt="Portfolio screenshot"></div>
		</div>
	</div>
</section>


<section id="careers" class="tech fullwidth flex vertical vertical__center">
	<div class="tech__content boxwidth">
		<div class="tech__content--header show-on">
			<h3>Technologies we use</h3>
			<object data="<?= IMAGES . 'star-3.svg' ?>" type="image/svg+xml" class="coop-icon">Cooperation icon</object>
		</div>
		<img src="<?= IMAGES . 'icons-circle.webp' ?>" alt="Circle of icons" class="tech__content--circle show-on__after">
	</div>
</section>


<section id="contact" class="why fullwidth flex vertical vertical__center">
	<div class="why__content boxwidth">
		<h2 class="show-on">Why Choose Us?</h2>
		<div class="why__boxes">
			<div class="why__boxes--single show-on">
				<object data="<?= IMAGES . 'icon-person.svg' ?>" type="image/svg+xml" width="40" height="100" class="coop-icon">Person icon</object>
				<h4>Experienced Team</h4>
				<p>
					Our team of seasoned professionals brings years<br>
					of industry experience,<br>ensuring we understand and meet your specific needs.
				</p>
			</div>
			<div class="why__boxes--single show-on">
				<object data="<?= IMAGES . 'icon-star.svg' ?>" type="image/svg+xml" width="100" height="100" class="coop-icon">Star icon</object>
				<h4>Proven Track Record</h4>
				<p>
					With numerous successful projects, we have established
					a&nbsp;reputation for delivering<br>high-quality solutions on time<br>and within budget.
				</p>
			</div>
			<div class="why__boxes--single show-on">
				<object data="<?= IMAGES . 'icon-bolt.svg' ?>" type="image/svg+xml" width="43.8" height="100" class="coop-icon">Bolt icon</object>
				<h4>Innovative Technology</h4>
				<p>
					We leverage the latest technologies and methodologies to create scalable, robust,<br>
					and future-proof solutions<br>for our clients.
				</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
