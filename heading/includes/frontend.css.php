
.fl-node-<?php echo $id; ?> <?php echo $settings->tag; ?>.fl-heading {
	text-align: <?php echo $settings->alignment; ?>;
	<?php if($settings->font_size == 'custom') : ?>
	font-size: <?php echo $settings->custom_font_size; ?>px;
	<?php endif; ?>
}
<?php if(!empty($settings->color)) : ?>
.fl-node-<?php echo $id; ?> <?php echo $settings->tag; ?>.fl-heading a,
.fl-node-<?php echo $id; ?> <?php echo $settings->tag; ?>.fl-heading .fl-heading-text,
.fl-node-<?php echo $id; ?> <?php echo $settings->tag; ?>.fl-heading .fl-heading-text * {
	color: #<?php echo $settings->color; ?>;
}
<?php endif; ?>
<?php if($global_settings->responsive_enabled && ($settings->r_font_size == 'custom' || $settings->r_alignment == 'custom')) : ?>
@media (max-width: <?php echo $global_settings->responsive_breakpoint; ?>px) {
	
	<?php if($settings->r_font_size == 'custom') : ?>
	.fl-node-<?php echo $id; ?> <?php echo $settings->tag; ?>.fl-heading {
		font-size: <?php echo $settings->r_custom_font_size; ?>px;
	}
	<?php endif; ?>
	
	<?php if($settings->r_alignment == 'custom') : ?>
	.fl-node-<?php echo $id; ?> <?php echo $settings->tag; ?>.fl-heading {
		text-align: <?php echo $settings->r_custom_alignment; ?>;
	}
	<?php endif; ?>
}    
<?php endif; ?>

<?php // Fancy Header Styles

$border_style = $settings->line_style;
$border_width = $settings->line_thickness;
$border_color = !empty($settings->line_color) ? $settings->line_color : 0;

if($settings->header_decoration != 'default') : ?>

	.fancy-header {
		overflow: hidden;
		position: relative;
		text-align: center;
		width: 100%;
	}

	.fancy-header:before,
	.fancy-header:after {
		content: " ";
		display: table;
	}

	.fancy-header:after {
		clear: both;
	}

	.fancy-header:before,
	.fancy-header:after {
		content: " ";
		display: table;
	}

	.fancy-header:after {
		clear: both;
	}

	.fancy-header .fh-left-offset {
		float: left;
		left: -50%;
		position: relative;
		width: 100%;
	}

	.fancy-header .fh-float-right {
		float: right;
	}

	.fancy-header .fh-center {
		float: right;
		position: relative;
		right: -50%;
	}

	.fancy-header .fh-center:before,
	.fancy-header .fh-center:after {
		border-top-width: <?php echo $border_width; ?>px;
		border-top-style: <?php echo $border_style; ?>;
		<?php if ($border_color) { echo 'border-top-color: #' . $border_color . ';'; } ?>
		content: "";
		display: block;
		margin: 0 0.5em;
		position: absolute;
		right: 100%;
		top: 50%;
		width: 5000px;
	}

	.fancy-header .fh-center:after {
		left: 100%;
	}

	.fancy-header h1,
	.fancy-header h2,
	.fancy-header h3,
	.fancy-header h4,
	.fancy-header h5,
	.fancy-header h6 {
		margin: 0;
		padding: 0;
		text-align: center;
	}
<?php endif; ?>