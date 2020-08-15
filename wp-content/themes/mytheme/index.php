<?php get_header() ?>


    Bonjour <?php wp_title(); ?>

<?php if (have_posts()): ?>
    
    <div class="row">
       
        <?php while(have_posts()): the_post(); ?>
            <div class="col-sm-4 mx-5">
                    <div class="card">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height:auto;'])?>
                        <img class="card-img-top" src="..." alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                            <p class="card-text"><?php the_excerpt()?></p>

                            <a href="<?php the_permalink()?>" class="card-link">Voir plus</a>
                            
                        </div>

                    </div>
            </div>
        <?php endwhile ?>
        
       
    </div>
    
     <?php montheme_pagination() ?>
     <?= paginate_links(); ?>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>

