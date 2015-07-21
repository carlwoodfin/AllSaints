
	<div class="row">
		<div class="col-md-8">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>
				<ul class="pager">
					<li class="previous"><?php previous_post_link('%link', '<i class="icon-chevron-left"></i>&nbsp; %title'); ?></li>
					<li class="next"><?php next_post_link('%link', '%title &nbsp;<i class="icon-chevron-right"></i>'); ?></li>
				</ul>
			</article>

			<?php comments_template(); ?>

		</div> <!-- .col-md-8 -->

<?php endwhile; endif; ?>


	</div> <!-- .row -->
