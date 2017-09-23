<?php
get_header();
?>
<hr>
<hr>
<div class="container-fluid">

    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <div class="col-sm-10 col-lg-10 col-md-10">
                    <h1><?php the_title() ?></h1>
                    <h2><strong></strong></h2>       
                    <?php the_content() ?>


                </div>
                <?php
            endwhile;
        else :
            ?>
            Vaya, no hay contenido.
        <?php
        endif;
        ?>
    </div>

</div>

<?php get_footer(); ?>