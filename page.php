<?php
get_header();

if (is_page(array(15172,20396))){
    /* Nuestro Equipo */
    
    function Sortify($string)
    {
        return preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|tilde|uml);~i', '$1' . chr(255) . '$2', htmlentities($string, ENT_QUOTES, 'UTF-8'));
    }
    
	$args = array(
		'post_type' => 'cv',
        'fields'         => 'ids',
		'posts_per_page' => '500',
        'meta_key'  => 'ordenportada',
		'orderby' => 'meta_value_num',
		'order'   => 'ASC'
	);
    
	$query = new WP_Query($args);
    $posts = $query->posts;

    if (ICL_LANGUAGE_CODE=="en"){
        $cargos="cargo_ing";$ordenar_por = "Listing by firm members";$volver="Back";
    }else{
        $cargos="cargo";$ordenar_por = "Ordenar por cargo";$volver="Volver";
    }    
    
    foreach( $posts as $post ) {
        $mutoElementID=icl_object_id($post,'cv',true,'es');
        $thispost = get_post($mutoElementID);
        $menu_order = $thispost->menu_order;
        $ordertitulo[] = array(
            'post_id' => $mutoElementID,
            'titulo' => get_the_title($post->ID),
            'nombre' => get_field('nombre',$post->ID),
            'url' => get_the_permalink($post->ID),
            'imagen' => wp_get_attachment_image_src(get_post_thumbnail_id($mutoElementID,"medium")),
            'cargo' => get_field($cargos,$post->ID),
            'membrete' => $menu_order,
            'orden' => $thispost->ordenportada
        );

    }// END FOREACH
    ?>
    <script type="text/javascript">
        var equipo = <?= json_encode($ordertitulo, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS) ?>;
        
<?php if (ICL_LANGUAGE_CODE=="en") { ?>
    
    function sort(a,b){
      a = a.orden;
      b = b.orden;
      a = Number(a);
      b = Number(b);

      if(a > b) {
        return 1;
      } else if (a < b) {
        return -1;
      }
      return 0;
    }
    equipo.sort(sort);
    
    //console.log(equipo);

<?php } ?>

    </script>
    <?php
}

/*
    Nuestro Equipo
*/
?>
       <span id="subir"></span>
        <div>
            <div class="container">
                <div id="content-area" class="clearfix">

                        <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                            
                            <?php
                            /*
                                Nuestro Equipo
                            */
                                
                            if (is_page(array(15172,20396))){?>
                                    <div id="contenido" class="et_pb_section et_pb_section_3 et_section_regular">
                                        <div class=" et_pb_row et_pb_row_1">
                                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_3">
                                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center">

                                                    <div class="et_pb_text_inner">
                                                        <?php echo do_shortcode('[searchform]'); ?>
                                                        <?php echo do_shortcode('[listado_letras]'); ?>
                                                    </div>

                                                </div>
                                                <!-- .et_pb_text -->
                                                <div id="listado_cargo" class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left escondido et_pb_text_1">
                                                    <div class="et_pb_text_inner">

                                                        <?php if (ICL_LANGUAGE_CODE=="es"){ ?>
                                                        <h2 class="tituloscv">Socios</h2>
                                                        <?php echo do_shortcode('[equipo categoria=Socios]'); ?>
                                                        <h2 class="tituloscv">Socio Emérito</h2>
                                                        <?php echo do_shortcode('[equipo categoria=socio-emerito]'); ?>
                                                        <h2 class="tituloscv">Directores</h2>
                                                        <?php echo do_shortcode('[equipo categoria=Directores]'); ?>
                                                        <?php echo do_shortcode('[equipo categoria=Tax]'); ?>
                                                        <h2 class="tituloscv">Asociados</h2>
                                                        <?php echo do_shortcode('[equipo categoria=Asociado]'); ?>
                                                        <h2 class="tituloscv">Otros Profesionales</h2>
                                                        <?php echo do_shortcode('[equipo categoria=otros-profesionales]'); ?>
                                                        <?php }else{ ?>
                                                        <h2 class="tituloscv">Partners</h2>
                                                        <?php echo do_shortcode('[equipo categoria=Socios]'); ?>
                                                        <h2 class="tituloscv">Emeritus Partner</h2>
                                                        <?php echo do_shortcode('[equipo categoria=socio-emerito]'); ?>
                                                        <h2 class="tituloscv">Counsels</h2>
                                                        <?php echo do_shortcode('[equipo categoria=Directores]'); ?>
                                                        <h2 class="tituloscv">Director - Tax & Audit</h2>
                                                        <?php echo do_shortcode('[equipo categoria=tax]'); ?>
                                                        <h2 class="tituloscv">Associates</h2>
                                                        <?php echo do_shortcode('[equipo categoria=Asociado]'); ?>
                                                        <h2 class="tituloscv">Professionals Legal Area</h2>
                                                        <?php echo do_shortcode('[equipo categoria=otros-profesionales]'); ?>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div id="listado_personas" class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_2">
                                                    <div class="et_pb_text_inner">

                                                        <?php //echo $todos; ?>

                                                        <ul id="alfabetico" class="listado_equipo">
                                                        </ul>
                                                        
                                                        <script>
                                                            
                                                            jQuery(function($) {
                                                                var cList = $('ul#alfabetico');
                                                                $.each(equipo, function(i) {
                                                                    // console.log(i);
                                                                    var li = $('<li/>')
                                                                        .addClass(equipo[i]["cargo"])
                                                                        .appendTo(cList);
                                                                    
                                                                    var aa = $('<a/>')
                                                                        .attr("href", equipo[i]["url"])
                                                                        .appendTo(li);
                                                                    
                                                                    var div = $('<div/>')
                                                                        .addClass("click-to-top")
                                                                        .appendTo(aa);
                                                                    if (i <= 21) {
                                                                        var img = $('<img />')
                                                                            .attr('src', equipo[i]["imagen"][0])
                                                                            .attr('width', '133px')
                                                                            .attr('height', '166px')
                                                                            .appendTo(div);
                                                                    } else {
                                                                        var img = $('<img />')
                                                                            .addClass('lazy')
                                                                            .attr('data-original', equipo[i]["imagen"][0])
                                                                            .attr('width', '133px')
                                                                            .attr('height', '166px')
                                                                            .appendTo(div);
                                                                    }

                                                                    var div2 = $('<div/>')
                                                                        .appendTo(div);
                                                                    var span = $('<span/>')
                                                                        .appendTo(div2);
                                                                    var aaa = $('<a/>')
                                                                        .attr("href", equipo[i]["url"])
                                                                        .text(equipo[i]["nombre"]) 
                                                                        .appendTo(span);
                                                                    var cargo = $('<p/>')
                                                                        .text(equipo[i]["cargo"].replace(/&amp;/g, '&'))
                                                                        .appendTo(span);
                                                                });
                                                            }); // FIN JQUERY +" "+equipo[i]["orden"]

                                                        </script>


                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                        </div>
                                        <!-- .et_pb_row -->
                                    </div>
                                    <?php 
                                    }else{ the_content(); }
                            /*
                                Nuestro Equipo
                            */
                            ?>

                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- .et_pb_post -->

                        <?php endwhile; ?>

                </div>
                <!-- #content-area -->
            </div>
            <!-- .container -->


        </div>
        <?php if (is_page(15172)){ ?>
        <div class="subir"><a href="#subir" class="scrollToTop"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/subir-18.png" /></a></div>
        <?php }elseif (is_page(20396)) { ?>
        <div class="subir"><a href="#subir" class="scrollToTop"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/subir-18.png" /></a></div>
        <?php } ?>
        <!-- #main-content -->

        <?php get_footer(); ?>
