<?php
/*
Template Name: Page
*/
 get_header(); ?>
  <div class="content-area columns">
    <div class='post column is-8'>
  		<?php if (have_posts()) : while (have_posts()) : the_post();?>

  			<h2><?php the_title(); ?></h2>

  			<?php the_content(); ?>
          <?php endwhile; endif; ?>
  	</div>
    <div class="column is-4">

    </div>
  </div>

<?php get_footer(); ?>
