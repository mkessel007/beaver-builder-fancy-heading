<?php if ( $settings->header_decoration == 'default') { ?>

	<<?php echo $settings->tag; ?> class="fl-heading">
		<?php if(!empty($settings->link)) : ?>
		<a href="<?php echo $settings->link; ?>" title="<?php echo $settings->heading; ?>" target="<?php echo $settings->link_target; ?>">
		<?php endif; ?>
		<span class="fl-heading-text"><?php echo $settings->heading; ?></span>
		<?php if(!empty($settings->link)) : ?>
		</a>
		<?php endif; ?>
	</<?php echo $settings->tag; ?>>

<?php } else { ?>

	<<?php echo $settings->tag; ?> class="fl-heading">
		<div class="fancy-header">
			<div class="fh-left-offset">
				<div class="fh-float-right">
					<div class="fh-center">
						<?php if(!empty($settings->link)) : ?>
						<a href="<?php echo $settings->link; ?>" title="<?php echo $settings->heading; ?>" target="<?php echo $settings->link_target; ?>">
						<?php endif; ?>
							<span class="fl-heading-text"><?php echo $settings->heading; ?></span>
						<?php if(!empty($settings->link)) : ?>
						</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</<?php echo $settings->tag; ?>>

<?php } ?>