<?php
get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

    if($_GET["esconder"]==1){$esconder="escondido";}
    else{$esconder="mostrar";}

?>

    <div id="contenido" class="et_pb_section  et_section_regular">
        <div class=" et_pb_row et_pb_row_1">
            <div class="et_pb_column et_pb_column_4_4  et_pb_column_3">



                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center">
                    <?php 
                    if($_GET["esconder"]!=1){
                        echo do_shortcode('[searchform]');
                        echo do_shortcode('[listado_letras]');
                    }else{
                        echo do_shortcode('[searchform_alert]');
                    }?>
                </div>

                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left escondido " id="listado_cargo">
                    <?php
                    echo do_shortcode('[equipo categoria="socios"]')."<br>";
                    echo do_shortcode('[equipo categoria="directores"]')."<br>";
                    echo do_shortcode('[equipo categoria="asociado"]')."<br>";
                    echo do_shortcode('[equipo categoria="otros-profesionales"]')."<br>";
                    ?>
                </div>

                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_2" id="listado_personas">

                    <?php
                       
                            if($_GET["esconder"] !=1){                                

                                $query1->query_vars['s'] = $_GET["s"];
                                $query1->query_vars['post_type'] = 'cv';
                                $query1->query_vars['posts_per_page'] = -1;
                                $query1->query_vars['orderby'] = 'menu_order';
                                $query1->query_vars['order'] = 'ASC';
                                relevanssi_do_query($query1);
                                
                                if ($query1->post_count!=0){
                                    $contador=0;
                                    foreach ($query1->posts as $post){
                                        echo resultado_busqueda($contador);
                                        $contador++;
                                    }
                                }else{
                                    get_template_part( 'includes/no-results', 'index' );
                                }
                                
                            }else{
                                
                                $query->query_vars['s'] = $_GET["s"];
                                $query->query_vars['post_type'] = 'post';
                                $query->query_vars['posts_per_page'] = 12;
                                $query->query_vars['paged'] = $paged;
                                $query->query_vars['orderby'] = 'date';
                                $query->query_vars['order'] = 'DSC';
                                relevanssi_do_query($query);
                                
                                if ($query->post_count!=0){
                                    
                                    echo "<div id='newsalert' class='busqueda'><div class='et_pb_ajax_pagination_container'>";
                                    foreach ($query->posts as $r_post) {

                                            echo "<article class='et_pb_post clearfix et_pb_no_thumb post-21577 post type-post status-publish format-standard hentry category-news-alert'><h2 class='entry-title'><a href=".get_permalink($r_post->ID).">".get_the_title($r_post->ID)."</a></h2></article>";
                                    }
                                    echo "</div></div><br>";
                                    if (function_exists('wp_pagenavi')){
                                        wp_pagenavi();
                                    }else{
                                        get_template_part( 'includes/navigation', 'index' );
                                    }
                                }else{
                                    get_template_part( 'includes/no-results', 'index' );
                                }

                            }

                        ?>

                </div>

            </div>
        </div>
    </div>

    <?php get_footer(); ?>
