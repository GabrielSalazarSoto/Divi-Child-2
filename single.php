<?php
get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );


$category = get_the_category();
$category_parent_id = $category[0]->category_parent;

if ( $category_parent_id != 0 ) {
    $category_parent = get_term( $category_parent_id, 'category' );
    $css_slug = $category_parent->slug;
    $css_name = $category_parent->name;
} else {
    $css_slug = $category[0]->slug;
    $css_name = $category[0]->name;
}

if (ICL_LANGUAGE_CODE=="en"){
    $fecha = get_the_date('F j').", ".get_the_date('Y');
    $titulo_categoria = "News Alerts";
    $gol = ', by ';
}else{
    $fecha = get_the_date('d')." de ".get_the_date('F')." de ".get_the_date('Y');
    $titulo_categoria = "Alertas Legales";
    $gol = ', por ';
}
?>

    <div id="contenido" class="et_pb_section ">
        <div id="contenido_<?php echo $css_slug ?>" class="et_pb_row ">

            <?php while ( have_posts() ) : the_post(); ?>

            <article class="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>

                <div class="entry-content">

                    <?php
                    // NEWS ALERT
                    if (in_category(array(25,51,32,55,49,54))){ ?>

                        <div class="titulos_al">
                            <div class="izquierda">
                                <?php echo $titulo_categoria; ?>
                            </div>
                            <?php if(in_category(array(32,55))){ ?>
                                <img src="/wp-content/themes/Divi-Child-2/img/logo-careyvisas2.png" />
                            <?php } ?>
                        </div>

                        <script type='text/javascript' src='http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5321ce4472d84b55'></script>

                        <h1 class="titulo_na"><strong><?php echo get_the_title() ?></strong></h1>

                        <div class="fecha">
                            <?php echo $fecha; ?>
                        </div>
                    <?php
                    }else{
                        if (in_category(array(26,52))){
                            $gol .=get_field('autor')." - LATIN LAWYER";
                        }
                    ?>

                        <h1 class='titulo'><strong><?php echo get_the_title() ?></strong></h1>
                        <small class="azul"><?php echo $fecha.$gol?></small>

                        <?php } ?>

                        <br clear=all>

                        <div class="columna1">
                            <?php the_content();/* if ( defined( 'ICL_LANGUAGE_CODE' ) ) {echo ICL_LANGUAGE_CODE;} */?>
                        </div>

                        <?php if (in_category(array(25,51,32,55,49,54,32,55))){ ?>
                        <div id=news_alert_lateral>
                            <?php if(get_field('pdf')){ ?>
                            <div id="text_icl-7" class="et_pb_widget widget_text_icl">
                                <div class="textwidget">
                                    <a href="<?php the_field('pdf'); ?>" target="_blank">
                                       <img src="http://www.carey.cl/wp-content/uploads/2017/05/bajar-pdf-1.png" border="0">
                                   </a>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php

                                if (in_category(array(25,51,49,54,))){
                                    dynamic_sidebar('newsalert1');
                                    if (in_category(array(49,54))){
                                    dynamic_sidebar('news alert pi');
                                    }
                                }elseif (in_category(array(32,55))){
                                    dynamic_sidebar('NewsAlert VISAS');
                                }
                                //dynamic_sidebar('NewsAlertS');
                            ?>
                        </div>
                        <?php } ?>

                </div>

                <!-- .entry-content -->
            </article>
            <!-- .et_pb_post -->
            <?php endwhile; ?>
        </div>

    </div>

    <?php get_footer(); ?>
