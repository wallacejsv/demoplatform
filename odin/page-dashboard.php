<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('dashboard');
$id_user = $current_user->ID;
?>

	<main class="content-dash">

			<div class="item nav-dash">
				<nav class="nav-left-fixed">
					<div class="content">
						<div class="photo-profile">
							<div class="image">
								<?php echo get_avatar($id_user, 150); ?>
							</div>
							<div class="name-profile">
								<p><?php echo $current_user->user_firstname . " " . $current_user->user_lastname; ?></p>
							</div>
						</div>
					</div>
				</nav>
			</div>

			<div class="item content">
				<div class="header-content">
					<div class="item1">
						<h1>Iae, <?php echo $current_user->user_firstname; ?>! Vamos codar?</h1>
					</div>
					<div class="item1">Devs</div>
				</div>
				<div class="boxes-courses">
					<div class="card-item">1</div>
					<div class="card-item">2</div>
					<div class="card-item">3</div>
					<div class="card-item">4</div>
				</div>
			</div>

	</main><!-- #main -->

<?php
get_footer('dashboard');
