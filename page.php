<?php get_header(); ?>
<hr>
<div class="container">
    
    <div class="row" >     
        <div class="col-sm-12 col-lg-12 col-md-12">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                 
                    <?php the_content(); ?>


                <?php
                endwhile;
            else:
                ?>
                <div class = "page-header">
                    <h1>Falta contenido</h1>
                </div>
                <p>Mensaje</p>

<?php endif; ?>
        </div>

    </div>

</div>
<?php get_footer(); ?>