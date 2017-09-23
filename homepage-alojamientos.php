<?php
/*
  Template Name: template_alojamientos
  Template Post Type: page
 */
get_header();
?>
<div class="container-fluid">
    <hr>
    <hr>
    <div class="row">
        <div class="col-lg-8">
            <h1>Alojamientos en Iguazu</h1>
            <p>
            </p>      
                    
       </div>

        <div class="col-lg-4">
            <h2>Alojamientos Iguazu</h2>


            <div class="fb-page" data-href="https://www.facebook.com/ambarhouseiguazu/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trasladoscataratas/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ambarhouseiguazu/">Departamentos Iguazu</a></blockquote></div>
            <hr>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">

            <?php
            $args = array('category_name' => 'alojamientos-iguazu');
            $category_posts = new WP_Query($args);
            if ($category_posts->have_posts()) :
                while ($category_posts->have_posts()) :
                    $category_posts->the_post();
                    ?>
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <div class="thumbnail">
        <?php if (has_post_thumbnail()) the_post_thumbnail('list_alo_thumbs'); ?>
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h5><a href="#"><?php the_title() ?></a>
                                </h5>
                                <p><?php the_excerpt() ?></p>
                            </div>
                            <a href="<?php the_permalink() ?>" class="btn btn-primary btn-block" role="button">Leer Mas..</a>
                            <div class="ratings">
                                <p class="pull-right">18 comentarios</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                ?>
                Vaya, no hay Departamentos.
            <?php
            endif;
            ?>

        </div>
    </div>

</div>
<?php
wp_reset_postdata();
 get_footer(); ?>