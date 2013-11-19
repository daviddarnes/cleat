<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo page_title("Page can't be found"); ?> - <?php echo site_name(); ?>
		</title>

		<!-- Asset links -->
		<link href="<?php echo theme_url('assets/style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.ico'); ?>" type="image/x-icon">
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>

		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="generator" content="Anchor CMS">

	</head>
	<body>
		<section>
			<header>
				<a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>"><?php echo site_name(); ?></a>
				<!-- Main Menu -->
				<?php if(has_menu_items()) : ?>
					<nav role="main">
						<?php while(menu_items()) : ?>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
						<?php endwhile; ?>
					</nav>
				<?php endif; ?>
				<hr/>
			</header>
