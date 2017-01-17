<article class="col-md-4 itemMasonry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="row">

	<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>

	<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>

	<!--<?php edit_post_link(); ?>-->

	</header>


	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

	<aside class="row">


		<section id="informationsArticle" class="col-md-7">
			<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
			<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
		</section>


		<section id="boutonArticle" class="col-md-5">
			<a class="btn btn-default pull-right" href="<?php the_permalink(); ?>">Lire l'article &#9656</a>
		</section>


	</aside>

</article>

