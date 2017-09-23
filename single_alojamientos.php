<?php
get_header();
?>
<div class="container">
    <div class="well">
    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>

                <hr>
                <hr>
                <!-- Portfolio Item Heading -->
                <h1 class="my-4"><?php the_title() ?>
                    <small>Ambar House Departamentos</small>
                </h1>
                <div class="row">



                    <div class="col-md-12">
                        <?php the_content() ?>

                        
                    </div>

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
</div>




<?php get_footer(); ?>