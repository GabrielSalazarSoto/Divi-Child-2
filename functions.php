<?php
// Carey 2016
/*
|--------------------------------------------------------------------------
| Incluir main.js
|--------------------------------------------------------------------------

function includeMain(){
    wp_enqueue_script('main_js',get_stylesheet_directory_uri().'/js/main.js',NULL,1.0,true);

}

/* =Clean up the WordPress head
------------------------------------------------- */
// remove dashicons
add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 100 );
function remove_default_stylesheet() {

	if (current_user_can( 'update_core' )) {
        wp_dequeue_style('divi-style');
	    return;
	}

	wp_dequeue_script( 'jquery-ui-datepicker' );
	wp_deregister_script( 'jquery-ui-datepicker' );

    wp_dequeue_style('divi-style');
    wp_dequeue_style('divi-fonts');
    wp_dequeue_style('wpcloudy');
    wp_dequeue_style('wpml-legacy-horizontal-list-0-css');
    wp_dequeue_script('sitepress.js');
    wp_dequeue_script('wpc-ajax');

    wp_deregister_style('dashicons');

    wp_deregister_script('wp-mediaelement');
		wp_dequeue_script('wp-mediaelement');

    wp_deregister_style('wp-mediaelement');
		wp_dequeue_style('wp-mediaelement');
}

// remove header links
add_action('init', 'tjnz_head_cleanup');
function tjnz_head_cleanup() {
    remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
    remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
    remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
    remove_action( 'wp_head', 'index_rel_link' );                           // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
    remove_action( 'wp_head', 'wp_generator' );                            // WP version
    remove_action( 'wp_head', '_wp_render_title_tag', 1 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_footer', 'mediaelement', 10, 0 );
    if (!is_admin()) {
        wp_deregister_script('jquery');                                     // De-Register jQuery
        wp_register_script('jquery', '', '', '', true);                     // Register as 'empty', because we manually insert our script in header.php
    }
}

// INCLUIR CATEGORIA AL BODY CLASS
add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
  if (is_single() ) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
      // add category slug to the $classes array
      $classes[] = $category->category_nicename;
    }
  }
  // return the $classes array
  return $classes;
}

// CREA CV POST TYPE
if(!function_exists('create_post_type'))
{
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'cv',
			array(
				'labels' => array(
					'name' => __( 'Todos los CV' ),
					'singular_name' => __( 'CV' )
				),
			'public' 				=> true,
			'has_archive'			=> true,
			'custom-fields' 		=> true,
			'taxonomies' 			=> array("cv-category"),
			'rewrite' 				=> array('slug' => 'cv'),
			'add_meta_box' 			=> 'qtrans_meta_meta_box',
			'show_in_rest'			=> true,
  			'rest_base'				=> 'cv-api',
  			'rest_controller_class' => 'WP_REST_Posts_Controller',
  			'supports'				=> array('title','thumbnail','editor','page-attributes','custom-fields'),
			)
		);


		register_post_type( 'areas',
			array(
				'labels' => array(
					'name' => __( 'Áreas de Interés' ),
					'singular_name' => __( 'Áreas' )
				),
            'has_archive'           => false,
			'public' 				=> true,
			'custom-fields' 		=> true,
			'taxonomies' 			=> array("areas-de-interes"),
			'rewrite' 				=> array('slug' => 'areas-de-interes'),
			'add_meta_box' 			=> 'qtrans_meta_meta_box',
			'show_in_rest'			=> true,
  			'rest_base'				=> 'areas-de-interes',
  			'rest_controller_class' => 'WP_REST_Posts_Controller',
  			'supports'				=> array('title','thumbnail','editor','page-attributes','excerpt'),
			)
		);
	}// CREA CV POST TYPE

    add_action( 'init', 'create_cargo_taxonomy' );
    function create_cargo_taxonomy() {

            $labels = array(
                'name'                           => 'Cargo',
                'singular_name'                  => 'Cargo',
                'search_items'                   => 'Buscar Cargos',
                'all_items'                      => 'Todos los Cargos',
                'edit_item'                      => 'Editar Cargo',
                'update_item'                    => 'Actualizar Cargo',
                'add_new_item'                   => 'Nuevo Cargo',
                'new_item_name'                  => 'Nuevo nombre Cargo',
                'menu_name'                      => 'Cargo',
                'view_item'                      => 'Ver Cargo',
                'popular_items'                  => 'Popular Cargo',
                'separate_items_with_commas'     => 'Separar Cargos con "," commas',
                'add_or_remove_items'            => 'Add or remove Cargos',
                'choose_from_most_used'          => 'Choose from the most used Cargos',
                'not_found'                      => 'No Cargos found'
            );

            register_taxonomy(
                'Cargo',
                'cv',
                array(
                    'label' => 'Cargo',
                    'hierarchical' => true,
                    'show_in_rest' => true,
                    'public' => true,
                    'show_ui' => true,
                    'show_in_nav_menus' => true,
                    'show_admin_column' => true,
                    'labels' => $labels
                )
            );

    }
    add_action( 'init', 'create_sector_taxonomy' );
    function create_sector_taxonomy() {

            $labels = array(
                'name'                           => 'Segmentos',
                'singular_name'                  => 'Sector',
                'search_items'                   => 'Buscar Sector',
                'all_items'                      => 'Todos los Sector',
                'edit_item'                      => 'Editar Sector',
                'update_item'                    => 'Actualizar Sector',
                'add_new_item'                   => 'Nuevo Sector',
                'new_item_name'                  => 'Nuevo nombre Sector',
                'menu_name'                      => 'Sector',
                'view_item'                      => 'Ver Sector',
                'popular_items'                  => 'Popular Sector',
                'separate_items_with_commas'     => 'Separar Sector con "," commas',
                'add_or_remove_items'            => 'Add or remove Sector',
                'choose_from_most_used'          => 'Choose from the most used Sector',
                'not_found'                      => 'No Sector found'
            );

            register_taxonomy(
                'Sector',
                'areas',
                array(
                    'label' => 'Sector',
                    'hierarchical' => true,
                    'show_in_rest' => true,
                    'public' => true,
                    'show_ui' => true,
                    'show_in_nav_menus' => true,
                    'show_admin_column' => true,
                    'labels' => $labels
                )
            );

    }
}


/*
|--------------------------------------------------------------------------
| ORDENAR POR CARGO
| @author Mike Hemberger
| @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
|--------------------------------------------------------------------------
*/

add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'cv'; // change to your post type
	$taxonomy  = 'Cargo'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET["cargo"]) ? $_GET["cargo"] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
        //echo $selected;
		wp_dropdown_categories(array(
			'show_option_all' => __("Show All {$info_taxonomy->label}"),
            'option_none_value'  => '-1',
			'taxonomy'        => "Cargo",
			'name'            => "cargo",
			'orderby'         => "name",
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
            'value_field'	  => 'slug',
		));
	};
}

function wpsd_add_book_args() {
    global $wp_post_types;
    $wp_post_types['cv']->show_in_rest = true;
    $wp_post_types['cv']->rest_base = 'cv-api';
    $wp_post_types['cv']->rest_controller_class = 'WP_REST_Posts_Controller';
}
add_action( 'init', 'wpsd_add_book_args', 30 );


/*
|--------------------------------------------------------------------------
| // CUSTOM SEARCH FORM CV
|--------------------------------------------------------------------------
*/

add_shortcode('searchform_cv', 'rlv_search_form_cv');
function rlv_search_form_cv() {
    if(ICL_LANGUAGE_CODE=="en"){$buscas="Who are you looking for?";}else{$buscas="¿A quién buscas?";}
    $url = get_site_url();
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" ><input type="text" placeholder="'.$buscas.'" value="' . get_search_query() . '" name="s" id="s"><input type="hidden" name="esconder" value=0 /></form>';
    return $form;
}

/*
|--------------------------------------------------------------------------
| Imagen de CV
|--------------------------------------------------------------------------
*/
add_shortcode('heroimage', 'thumbnail_in_content');
function thumbnail_in_content() {
    global $post;
    $thumb = icl_object_id($post->ID,'post',false,'es');
    return get_the_post_thumbnail($thumb);
}

/*
|--------------------------------------------------------------------------
| JAIME CAREY HIJO
|--------------------------------------------------------------------------
*/

add_shortcode('jaimehijo', 'jaime_hijo');
function jaime_hijo() {
	global $post;
	if ($post->ID == 816){$jaimecareyhijo=" (<span style=text-transform:capitalize;>Hijo</span>)";}elseif (get_the_ID() == 23577){$jaimecareyhijo="<span style=text-transform:capitalize;>, Jr.</span>";}else{$jaimecareyhijo='';}

	return $jaimecareyhijo;
}
/*
|--------------------------------------------------------------------------
| EXPERIENCIA CV INGLES
|--------------------------------------------------------------------------
*/
add_shortcode('experiencia_ing', 'experiencia_ing');
function experiencia_ing() {

    global $post;
    $esid3=icl_object_id($post->ID,'post',false,'es');

    if( get_field('asesorias_ing',$esid3) <> "" or get_field('premios_ing',$esid3) <> "" or get_field('actividades_ing',$esid3) <> "" or get_field('publicaciones_ing',$esid3) <> "" or get_field('seminarios_ing',$esid3) <> "" ){
        $expe_esp = "<div class='scroll mCustomScrollbar' data-mcs-theme='dark'>";
        $expe_esp .= get_field('experiencia_ing',$esid3);
        $expe_exp .= "</div>";
        return $expe_esp;
    }
}

add_shortcode('experiencia', 'experiencia_esp');
function experiencia_esp() {
    if(get_field('asesorias_esp') <> "" or get_field('premios_esp') <> "" or get_field('actividades_esp') <> "" or  get_field('publicaciones_esp') <> "" or  get_field('seminarios_esp') <> ""){
        $expe_esp = "<div class='scroll mCustomScrollbar' data-mcs-theme='dark'>";
        $expe_esp .= get_field('experiencia_esp',$esid3);
        $expe_exp .= "</div>";
        return $expe_esp;
    }
}
/*
|--------------------------------------------------------------------------
| Contenido CV ESPAÑOL
|--------------------------------------------------------------------------
*/
add_shortcode('contenidocv_esp', 'contenido_cv');
function contenido_cv($atts) {

    if (!empty( $atts['cvid'] ) ) {
        $AID=icl_object_id($atts['cvid'],'areas',true,'es');
    }else{
        global $post;
        $AID=icl_object_id($post->ID,'areas',true,'es');
    }

    $blanco = 0;

    if(get_field('asesorias_esp',$AID)){$contenido .= '<div id=asesorias class=contenido_cv><div class="sprite"></div><h3>EXPERIENCIA REPRESENTATIVA</h3>'.get_field('asesorias_esp',$AID).'</div>';}
    else{$blanco = $blanco+1;}

    if(get_field('premios_esp',$AID)){$contenido .= '<div id=premios class=contenido_cv><div class="sprite"></div><h3>PREMIOS Y RECONOCIMIENTOS</h3>'.get_field('premios_esp',$AID).'</div>';}
    else{$blanco = $blanco+1;}

    if(get_field('actividades_esp',$AID)){$contenido .= '<div id=actividades class=contenido_cv><div class="sprite"></div><h3>ACTIVIDADES Y MEMBRESÍAS</h3>'.get_field('actividades_esp',$AID).'</div>';}
    else{$blanco = $blanco+1;}

    if(get_field('publicaciones_esp',$AID)){$contenido .= '<div id=publicaciones class=contenido_cv><div class="sprite"></div><h3>PUBLICACIONES</h3>'.get_field('publicaciones_esp',$AID).'</div>';}
    else{$blanco = $blanco+1;}

    if(get_field('seminarios_esp',$AID)){$contenido .= '<div id=seminarios class="contenido_cv"><div class="sprite"></div><h3>SEMINARIOS</h3>'.get_field('seminarios_esp',$AID).'</div>';}
    else{$blanco = $blanco+1;}

    if($blanco==5){
        $contenido.='<div id=experiencia class="contenido_cv contenido_cv_experiencia"><div class="sprite"></div><h3>EXPERIENCIA</h3>'.get_field('experiencia_esp',$AID).'</div>';
    }

    return $contenido;
}

/*
|--------------------------------------------------------------------------
| Contenido CV lateral ESPAÑOL
|--------------------------------------------------------------------------
*/
add_shortcode('contenidocvlateral_esp', 'contenido_cv_lateral');
function contenido_cv_lateral($atts) {

    if (!empty( $atts['cvid'] ) ) {
        $AID=icl_object_id($atts['cvid'],'areas',true,'es');
    }else{
        global $post;
        $AID=icl_object_id($post->ID,'areas',true,'es');
    }

    if( get_field('educacion_esp',$AID))
    {
        $contenido_lateral = '<div id=educacion class="contenido_cv2"><div class="sprite"></div><h3>Educación</h3>'.get_field('educacion_esp',$AID).'</div>';
    }
    if( get_field('admisiones_esp',$AID))
    {
        $contenido_lateral .= '<div id=admisiones class="contenido_cv2"><div class="sprite"></div><h3>Admisiones</h3>'.get_field('admisiones_esp',$AID).'</div>';
    }
    if( get_field('idiomas_esp',$AID))
    {
        $contenido_lateral .= '<div id=idiomas class="contenido_cv2"><div class="sprite"></div><h3>Idiomas</h3>'.get_field('idiomas_esp',$AID).'</div>';
    }

    $contenido_lateral .= documentos_rel();

    return $contenido_lateral;
}

/*
|--------------------------------------------------------------------------
| Contenido CV INGLES
|--------------------------------------------------------------------------
*/
add_shortcode('contenidocv_ing', 'contenido_cv_ing');
function contenido_cv_ing() {

    global $post;
    $esid=icl_object_id($post->ID,'post',false,'es');

    $blanco=0;

    if( get_field('asesorias_ing',$esid) ){$contenido .= '<div id=asesorias class=contenido_cv><div class="sprite"></div><h3>REPRESENTATIVE EXPERIENCE</h3>'.get_field('asesorias_ing',$esid).'</div>';}
    else{$blanco = $blanco+1;}

    if( get_field('premios_ing',$esid) ){$contenido .= '<div id=premios class=contenido_cv><div class="sprite"></div><h3>AWARDS AND RECOGNITIONS</h3>'.get_field('premios_ing',$esid).'</div>';}
    else{$blanco = $blanco+1;}

    if( get_field('actividades_ing',$esid) ){$contenido .= '<div id=actividades class=contenido_cv><div class="sprite"></div><h3>ACTIVITIES AND MEMBERSHIPS</h3>'.get_field('actividades_ing',$esid).'</div>';}
    else{$blanco = $blanco+1;}

    if( get_field('publicaciones_ing',$esid) ){$contenido .= '<div id=publicaciones class=contenido_cv><div class="sprite"></div><h3>PUBLICATIONS</h3>'.get_field('publicaciones_ing',$esid).'</div>';}
    else{$blanco = $blanco+1;}

    if( get_field('seminarios_ing',$esid) ){$contenido .= '<div id=seminarios class="contenido_cv"><div class="sprite"></div><h3>SEMINARS</h3>'.get_field('seminarios_ing',$esid).'</div>';}
    else{$blanco = $blanco+1;}

    if($blanco==5){$contenido.='<div id=experiencia class="contenido_cv contenido_cv_experiencia"><div class="sprite"></div><h3>EXPERIENCE</h3>'.get_field('experiencia_ing',$esid).'</div>';}

    return $contenido;
}

/*
|--------------------------------------------------------------------------
| Contenido CV lateral INGLES
|--------------------------------------------------------------------------
*/
add_shortcode('contenidocvlateral_ing', 'contenido_cv_lateral_ing');
function contenido_cv_lateral_ing() {

    global $post;
    $esid2=icl_object_id($post->ID,'post',false,'es');

    if( get_field('educacion_ing',$esid2) ){$contenido_lateral = '<div id=educacion class="contenido_cv2"><div class="sprite"></div><h3>Education</h3>'.get_field('educacion_ing',$esid2).'</div>';}
    if( get_field('admisiones_ing',$esid2) ){$contenido_lateral .= '<div id=admisiones class="contenido_cv2"><div class="sprite"></div><h3>Admissions</h3>'.get_field('admisiones_ing',$esid2).'</div>';}
    if( get_field('idiomas_ing',$esid2) ){$contenido_lateral .= '<div id=idiomas class="contenido_cv2"><div class="sprite"></div><h3>Languages</h3>'.get_field('idiomas_ing',$esid2).'</div>';}

    $contenido_lateral .= documentos_rel();

    return $contenido_lateral;
}

/*
|--------------------------------------------------------------------------
| Contenido CV botones en header <div class="binder"></div>
|--------------------------------------------------------------------------
*/
add_shortcode('contenidocvbotones', 'contenido_cv_cabecera');
function contenido_cv_cabecera() {
    global $post;
    if(get_field("linkedin",$post->ID)){$linked='<a href='.get_field('linkedin').' rel="nofollow" target="_blank" class="noprint icon linkedin" title="Perfil en LinkedIn"><div class="linkedin"></div></a>';}
    $contenido_botones = '<table style="border: 0px;" border="0" width="100%" cellspacing="0" cellpadding="20" class=cv_tabla><tbody><tr><td align="left" width="35px"><div class=email></div></td><td align="left" valign="top"><a href=mailto:'.get_field('email_esp').'>'.get_field('email_esp').'</a></td><td colspan="2" rowspan="2"><div class="vcard"><a href="'.get_stylesheet_directory_uri().'/vcard.php?id='.$post->ID.'&lang='.ICL_LANGUAGE_CODE.'" target="_blank" class="noprint icon vcard" title="Descargar Vcard"></a></div><a href="/i/print.php?x='.$post->ID.'&lang='.ICL_LANGUAGE_CODE.'" target=blank class="print"></a>'.$linked.'</td></tr><tr><td><div class=telefono></div></td><td>'.get_field('telefono_esp').'<br>'.get_field('telefono2').'</td></tr></tbody></table>';
    return $contenido_botones;
}

/*
|--------------------------------------------------------------------------
| Contenido CV botones en header INGLES <div class="binder"></div>
|--------------------------------------------------------------------------
*/
add_shortcode('contenidocvbotones_ing', 'contenido_cv_cabecera_ing');
function contenido_cv_cabecera_ing() {

    global $post;
    $esid4=icl_object_id($post->ID,'cv',false,'es');
    if(get_field("linkedin",$esid4)){$linkedING='<a href='.get_field("linkedin",$esid4).' rel="nofollow" target="_blank" class="noprint icon linkedin" title="Perfil en LinkedIn"><div class="linkedin"></div></a>';}else{$linkedING="";}
    $contenido_botones = '<table style="border: 0px;" border="0" width="100%" cellspacing="0" cellpadding="20" class=cv_tabla><tbody><tr><td align="left" width="35px"><div class=email></div></td><td align="left" valign="top"><a href=mailto:'.get_field('email_esp').'>'.get_field('email_esp').'</a></td><td colspan="2" rowspan="2"><div class="vcard"><a href="'.get_stylesheet_directory_uri().'/vcard.php?id='.$post->ID.'&lang='.ICL_LANGUAGE_CODE.'" target="_blank" class="noprint icon vcard" title="Download Vcard"></a></div><div class="print"></div>'.$linkedING.'</td></tr><tr><td><div class=telefono></div></td><td>'.get_field('telefono_esp').'<br>'.get_field('telefono2').'</td></tr></tbody></table>';
    return $contenido_botones;
}

/*
|--------------------------------------------------------------------------
| Areas de practica
|--------------------------------------------------------------------------
*/
add_shortcode('selector_areas','comboareas');
function comboareas($atts){

    extract( shortcode_atts( array(
        'mostrar' => 'si',
    ), $atts ) );

    if (ICL_LANGUAGE_CODE=="en"){$seleccionesector="Select Area of Interest";}else{$seleccionesector="Seleccione sector";}
    $sector_list = get_terms('Sector');
    global $post;

    $comboareas = "<div id='selector_sectores'>";
    if($mostrar<>"no"){
        $comboareas .= "<div class=flecha></div><span class='abridor'><span class=selectedArea></span></span>";
    }else{
        $comboareas .= "<div class=flecha></div><span class='abridor'>".$seleccionesector."</span>";
    }
    $comboareas .= "<div id=areas_detalle><div class='centrar'>";

    foreach($sector_list as $sector){
            $comboareas.="<div value='".$sector->slug."x' class='ssector'>".htmlspecialchars_decode ($sector->name)."</div>";
    }
    if (ICL_LANGUAGE_CODE=="en"){
        $comboareas .="<div class='ssector chinadesk'><a href=https://www.carey.cl/en/practice-areas-and-industries/china-desk/>China Desk</a></div>";
    }else{
        $comboareas .="<div class='ssector chinadesk'><a href=https://www.carey.cl/areas-de-practica-e-industrias/china-desk/>China Desk</a></div>";
    }

    if($mostrar<>"no"){
        $comboareas .="<br break=all>&nbsp;<br break=all>&nbsp;<br break=all>&nbsp;".areas_practica_detalle()."</div>";
    }else{
        $comboareas .="</div>";
    }
    $comboareas .="</div></div>";
    wp_reset_postdata();
    return $comboareas;
}// FIN SELECTOR AREAS



add_shortcode('areas', 'areas_practica');
function areas_practica() {
    global $post;
    wp_reset_query();
    if (ICL_LANGUAGE_CODE=="en"){
			$args = array('post_type' => 'areas',
	                      'suppress_filters' => false,
	                      'posts_per_page' => '-1',
	                      'orderby' => 'title',
	                      'order' => 'ASC',
	     );
	}else{
	    $args = array('post_type' => 'areas',
                      'suppress_filters' => false,
		                  'posts_per_page' => '-1',
		                  'orderby' => 'title',
		                  'order' => 'ASC',
		     );
	}

    $loop = new WP_Query($args);

    foreach($loop as $area){
        $mutoElementID=icl_object_id($area->ID,'areas',true,'es');
        $ordertitulo[] = array(
            'post_id' => $mutoElementID,
            'titulo' => get_the_title($area->ID),
            );
    }//END FOREACH

    //var_dump($ordertitulo);

     if($loop->have_posts()) {
        $areas = '<ul class="sector">';
        while($loop->have_posts()) : $loop->the_post();

            //if ($post->ID=="22495" or $post->ID=="22496"){continue;}

            $term_list = wp_get_post_terms($post->ID, 'Sector', array("fields" => "all"));
            $sectores='';
            foreach ($term_list as $term) {$sectores .=$term->slug.'x '; }
            $areas .= '<li><a href="'.get_permalink().'" class="'.$sectores.'">'.get_the_title().'</a></li>';

        endwhile;
        $areas .= '</ul>';
     }
    wp_reset_postdata();
	return $areas;
}//FIN AREAS


function areas_practica_detalle() {
    global $post;
    wp_reset_query();
    if (ICL_LANGUAGE_CODE=="en"){
		$args = array('post_type' => 'areas',
	                      'suppress_filters' => false,
	                      'fields'         => 'ids',
	                      'posts_per_page' => '-1',
	                      'orderby' => 'title',
	                      'order' => 'ASC',
	     );
        $x="ing";
	}else{
	    $args = array('post_type' => 'areas',
                          'suppress_filters' => false,
		                  'fields'         => 'ids',
		                  'posts_per_page' => '-1',
		                  'orderby' => 'title',
		                  'order' => 'ASC',
		);
        $x="esp";
	}

     $loop = new WP_Query($args);
     if($loop->have_posts()) {
         $areas = "<ul class='sector'>";
        while($loop->have_posts()) : $loop->the_post();
         //if ($post=="22495" or $post=="22496"){continue;}
            $term_list = wp_get_post_terms($post, 'Sector', array("fields" => "all"));
            $sectores='';
            foreach ($term_list as $term) {$sectores .=$term->slug.'x '; }
            $areas .= '<li><a href="'.get_permalink().'" class="'.$sectores.'">'.get_the_title().'</a></li>';
        endwhile;
         $areas.="</ul>";
     }
    wp_reset_postdata();
	return $areas;
}// FIN AREAS DETALLE

add_shortcode('areas_relacionados','documentos_rel');
function documentos_rel(){
    if( get_field('documentos_relacionados') )
    {
        if (ICL_LANGUAGE_CODE=="en"){
            $contenido_lateral .= '<div class="noprint documentos"><div class=spritedoc></div><h3>Related Documents</h3><ul class=documentos_relacionado>';
            $txtvermas="Read more";
        }else{
            $contenido_lateral .= '<div class="noprint documentos"><div class=spritedoc></div><h3>Documentos Relacionados</h3><ul class=documentos_relacionado>';
            $txtvermas="Ver +";
        }
        $documentos = get_field('documentos_relacionados');
        rsort($documentos);
        if(count($documentos) >=2){
            $documentos=array_slice($documentos,0,2);
            $vermas="<a href='/i/relacionados.php?x=".get_the_ID()."&lang=".ICL_LANGUAGE_CODE."' class='iframe-r'>".$txtvermas."</a>";
        }else{
            $vermas="";
        }
        if($documentos){
            foreach($documentos as $documento):
                $documento=icl_object_id($documento,'areas',true,ICL_LANGUAGE_CODE);
                $contenido_lateral .= '<li><a href='.get_permalink($documento).' target=blank>'.get_the_title($documento).'</a></li>';  // The post title
            endforeach;
        }
        $contenido_lateral .= '</ul>'.$vermas.'</div>';
    }
    return $contenido_lateral;
}

add_shortcode('areas_relacionadas', 'nds_linked_entry_footer', 9 );
function nds_linked_entry_footer($atts) {

    if (!empty( $atts['cvid'] ) ) {
        $AID=icl_object_id($atts['cvid'],'areas',true,'es');
        $sectores = get_field('abogados_relacionados',$AID);
    }else{
        global $post;
        $AID=icl_object_id($post->ID,'areas',true,'es');
        $sectores = get_field('abogados_relacionados',$AID);
    }

		//$salida = "h0, hi mark";

    if($sectores){
        if (ICL_LANGUAGE_CODE == 'en') :
            $titulos ="RELATED AREAS";
        else :
            $titulos ="ÁREAS RELACIONADAS";
        endif;

        $salida = '<div class="areas_relacionadas"><div class="spriteareas"></div><h3>'.$titulos.'</h3><ul class=documentos_relacionado>';

        foreach($sectores as $sectore) {
            $sectorr=icl_object_id($sectore,'areas',true,ICL_LANGUAGE_CODE);
            $arreglo_sector[] = array(
                'titulo' => get_the_title($sectorr),
                'id' => $sectorr
            );
        };

        foreach ($arreglo_sector as $key => $row) {
            $aux[$key] = $row['titulo'];
        }
        array_multisort($aux, SORT_ASC, $arreglo_sector);

        foreach($arreglo_sector as $sector) {
            $sectorr=icl_object_id($sector['id'],'areas',true,ICL_LANGUAGE_CODE);
            if (get_the_title($sectorr)=="" or get_post_type($sector['id']) != 'areas' or $sectorr == '22665' or $sectorr == '22666' or $sectorr == '22667'  or $sectorr == '22668' ){continue;}
						if ($sectorr == '17644'  or $sectorr == '17791'){
							$salida .="<li><a href='#'>".get_the_title($sectorr)."</a></li>";
						}else{
							$salida .="<li><a href='".get_permalink($sectorr)."'>".get_the_title($sectorr)."</a></li>";
						}
        }
        $salida .= '</ul></div>';
    }

	return $salida;
}

add_shortcode('areas_relacionadas_xml', 'areasrelacionadasxml', 9 );
function areasrelacionadasxml($atts) {

        global $post;
        $AID=icl_object_id($post->ID,'areas',true,'es');
        $sectores = get_field('abogados_relacionados',$AID);

        foreach($sectores as $sectore) {
            $sectorr=icl_object_id($sectore,'areas',true,ICL_LANGUAGE_CODE);
            $arreglo_sector[] = array(
                'titulo' => get_the_title($sectorr),
                'id' => $sectorr
            );
        };

        foreach ($arreglo_sector as $key => $row) {
            $aux[$key] = $row['titulo'];
        }
        array_multisort($aux, SORT_ASC, $arreglo_sector);

        foreach($arreglo_sector as $sector) {
            $sectorr=icl_object_id($sector['id'],'areas',true,ICL_LANGUAGE_CODE);
            if (get_the_title($sectorr)=="" or get_post_type($sector['id']) != 'areas' or $sectorr == '22665' or $sectorr == '22666' or $sectorr == '22667'  or $sectorr == '22668' ){continue;}
            
						if ($sectorr == '17644'  or $sectorr == '17791'){
							$out .="<PracticeArea>".get_the_title($sectorr)."</PracticeArea>";
						}else{
							$out .="<PracticeArea>".get_the_title($sectorr)."</PracticeArea>";
						}
        }

	return $out;
}
/*
function areasrelacionadas() {

        global $post;
        $sectores = get_field('abogados_relacionados',false);

        //var_dump($sectores);

        $sectoresnn = new WP_Query(array(
            'post_type'         => 'areas',
			//'suppress_filters' => false,
            'post__in'			=> $sectores_id,
            'post_status'		=> 'publish',
            'fields'         => 'ids',
            'orderby'			=> 'post_title',
            'order'				=> 'ASC',
            'posts_per_page'    => '-1'
        ));

        if($sectores){

            if (ICL_LANGUAGE_CODE == 'en') :
                $titulos ="RELATED AREAS";
            else :
                $titulos ="ÁREAS RELACIONADAS";
            endif;

            $salida = '<div class="areas_relacionadas"><div class="spriteareas"></div><h3>'.$titulos.'</h3><ul class=documentos_relacionado>';

            foreach($sectores as $sectore) {
                $sectorr=icl_object_id($sectore,'areas',true,ICL_LANGUAGE_CODE);
                $arreglo_sector[] = array(
                    'titulo' => get_the_title($sectorr),
                    'id' => $sectorr
                );
            };

            foreach ($arreglo_sector as $key => $row) {
                $aux[$key] = $row['titulo'];
            }
            array_multisort($aux, SORT_ASC, $arreglo_sector);

            foreach($arreglo_sector as $sector) {
                $sectorr=icl_object_id($sector['id'],'areas',true,ICL_LANGUAGE_CODE);
                if (get_the_title($sectorr)=="" or get_post_type($sector['id']) != 'areas'){continue;}
                $salida .="<li><a href='".get_permalink($sectorr)."'>".get_the_title($sectorr)."</a></li>";
            }
            $salida .= '</ul></div>';
        }


	return $salida;
}
*/

function my_relationship_query( $args, $field, $post_id ) {
    $args['orderby'] = 'title';
    $args['order'] = 'ASC';
	// return
    return $args;

}

// filter for every field
add_filter('acf/fields/relationship/query', 'my_relationship_query', 10, 3);

/*
|--------------------------------------------------------------------------
| contenidos areas de practica
|--------------------------------------------------------------------------
*/
add_shortcode('contenidoareas', 'contenido_apf');
function contenido_apf() {
    global $post;
    $contenidoapf = apply_filters('the_content',get_the_content($post->ID));
    return $contenidoapf;
}

/*
|--------------------------------------------------------------------------
| NUESTRO ESTUDIO PREMIOS
|--------------------------------------------------------------------------
*/
add_shortcode('premios', 'nuestros_premios');
function nuestros_premios() {
    global $post;
	$args = array(
		'post_type' => 'post',
        'cat' => '30',
		'posts_per_page' => '-1',
        'order_by' => 'date',
        'order' => 'ASC',
	);

	$query = new WP_Query($args);
	$pemios = "<div id=premios_content><ul id=premios_ul>";

        while ( $query->have_posts() ) : $query->the_post();
            $post_slug=$post->post_name;
            $pemios .= "<li id=".$post_slug."><h3 class='patua'>".get_the_title()."</h3><div class=contenido>".get_the_content_with_formatting()."</div></li>";
        endwhile;

	$pemios.= "</ul></div>";
	wp_reset_postdata();
	return $pemios;
}

function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

add_shortcode('equipo', 'team');
function team($atts) {
	$categoria = "";
	extract(shortcode_atts(array('categoria' => 'No especificado',), $atts));

	$args = array(
		'post_type' => 'cv',
		'posts_per_page' => '-1',
		'orderby' => 'menu_order',
		'order'   => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'Cargo',
				'field'    => 'slug',
				'terms'    => $categoria,
			),
		),
	);

	$query = new WP_Query($args);

    $counter = 0;
	$equipo .= "<div id='$categoria'>";
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $equipo .= resultado_busqueda($counter);
        $counter++;
	endwhile;
	$equipo.= "</div><br clear=all>";
	wp_reset_postdata();
	else :
		$equipo = "<p>no encontrado</p>";
	endif;

	return $equipo;
}

/*
|--------------------------------------------------------------------------
| // DATOS CONTACTO NEWS ALERT
|--------------------------------------------------------------------------
*/
add_shortcode('datoscontacto', 'datos_de_contacto');
function datos_de_contacto($atts) {

    $abogados = get_field('abogados_relacionados',false,false);
    $ordermembrete = new WP_Query(array(
        'post_type'         => 'cv',
		//'suppress_filters' => false,
        'post__in'			=> $abogados,
        'post_status'		=> 'publish',
        'orderby'			=> 'menu_order',
        'order'				=> 'ASC',
        'posts_per_page'    => '-1'
    ));


    if (ICL_LANGUAGE_CODE=="en"){$cargo = "cargo_ing";}else{$cargo = "cargo";}

    $datos_contacto = "<div id=datos_contacto>";
    while ($ordermembrete->have_posts() ) : $ordermembrete->the_post();
			if (get_the_ID() == 816){$jaimecareyhijo=" (Hijo)";}elseif (get_the_ID() == 23577){$jaimecareyhijo=", Jr.";}else{$jaimecareyhijo='';}
			$datos_contacto .="<strong><a href='".get_the_permalink()."' rel='bookmark'>".get_field('nombre').$jaimecareyhijo."</a></strong><br />";
      $datos_contacto .="<b>".get_field($cargo)."</b><br />";
      $datos_contacto .=get_field('telefono_esp')."<br />";
      $datos_contacto .="<a href=mailto:".get_field('email_esp').">".get_field('email_esp')."</a><br><br>";
    endwhile;

    $datos_contacto .= "</div>";

    return $datos_contacto;
}

/*
|--------------------------------------------------------------------------
| Áreas de Práctica - SLIDER
|--------------------------------------------------------------------------
*/

add_shortcode('abogadosrelacionados', 'abogados_relacionados');
function abogados_relacionados($atts) {

    if(get_field('abogados_relacionados'))
    {
        if(ICL_LANGUAGE_CODE=="en")
        {
            $abogadosr = "<div class='titulos'><h2 style='padding-top:0px;margin-top:0px;'>Team</h2></div>";
            $cargo = "cargo_ing";
            global $sitepress;
            $lang='en';
            $sitepress->switch_lang($lang);
        }
        else
        {
            $abogadosr = "<div class='titulos'><h2 style='padding-top:0px;margin-top:0px;'>Equipo</h2></div>";
            $cargo = "cargo";
        }

        $abogados = get_field('abogados_relacionados');
        $queryabogados = new WP_Query(array(
            'post_type'         => 'cv',
			//'suppress_filters' => false,
            'post__in'			=> $abogados,
            'post_status'		=> 'publish',
            'orderby'			=> 'menu_order',
            'order'				=> 'ASC',
            'posts_per_page'    => '-1'
        ));

        $abogadosr .= "<div class='abogadoslider'>";
        while ($queryabogados->have_posts() ) : $queryabogados->the_post();

            $user = wp_get_current_user();
            $allowed_roles = array('editor', 'administrator', 'author');
            if( array_intersect($allowed_roles, $user->roles ) ) {
                $thispost = get_post(get_the_ID());
                $menu_order = $thispost->menu_order;
                $resutado_html = "<br>Membrete:".$menu_order;
            }

            $AID=icl_object_id(get_the_ID(),'cv',false,'es');
						if (get_the_ID() == 816){$jaimecareyhijo=" (Hijo)";}elseif (get_the_ID() == 23577){$jaimecareyhijo=", Jr.";}else{$jaimecareyhijo='';}
            $abogadosr .= "<div class=".get_post_field( 'menu_order',$AID)."><a href='".get_permalink(get_the_ID())."'><img width=200 height=240 src='".get_the_post_thumbnail_url($AID)."' /></a><a href='".get_permalink()."' class='nombre'>".get_the_title().$jaimecareyhijo."</a><span class='cargo'>".get_field($cargo).$resutado_html."</span></div>";

        endwhile;
        $abogadosr .= "</div>";
        wp_reset_query();
    }
        if(ICL_LANGUAGE_CODE=="en")
        {
		  $lang='es';
		  $sitepress->switch_lang($lang);
        }

    return $abogadosr;
}

add_shortcode('abogadosrelacionados_chile', 'abogados_relacionados2');
function abogados_relacionados2() {

    if(get_field('abogados_relacionados'))
    {
        if(ICL_LANGUAGE_CODE=="en")
        {
            $abogadosr = "<div class='titulos'><h2 style='padding-top:0px;margin-top:0px;'>Team</h2></div>";
            $cargo = "cargo_ing";
            global $sitepress;
            $lang='es';
            $sitepress->switch_lang($lang);
        }
        else
        {
            $abogadosr = "<div class='titulos'><h2 style='padding-top:0px;margin-top:0px;'>Equipo</h2></div>";
            $cargo = "cargo";
        }



        $abogados = get_field('abogados_relacionados','22665');
        $queryabogados = new WP_Query(array(
            'post_type'         => 'cv',
						//'suppress_filters' => false,
            'post__in'			=> $abogados,
            'post_status'		=> 'publish',
            'orderby'			=> 'menu_order',
            'order'				=> 'ASC',
            'posts_per_page'    => '-1'
        ));

        $abogadosr .= "<div class='abogadoslider'>";
        while ($queryabogados->have_posts() ) : $queryabogados->the_post();
            $AID=icl_object_id(get_the_ID(),'cv',true,'es');
            $abogadosr .= "<div class=".get_post_field( 'menu_order',$AID)."><a href='".get_permalink()."'><img width=200 height=240 src='".get_the_post_thumbnail_url($AID)."' /></a><a href='".get_permalink()."' class='nombre'>".get_the_title()."</a><span class='cargo'>".get_field($cargo)."</span></div>";
        endwhile;
        $abogadosr .= "</div>";
        wp_reset_query();
    }
        if(ICL_LANGUAGE_CODE=="en")
        {
		  $lang='en';
		  $sitepress->switch_lang($lang);
        }

    return $abogadosr;
}

add_shortcode('abogadosrelacionados_china', 'abogados_relacionados3');
function abogados_relacionados3() {

    if(get_field('abogados_relacionados'))
    {
        if(ICL_LANGUAGE_CODE=="en")
        {
            $abogadosr = "<div class='titulos'><h2 style='padding-top:0px;margin-top:0px;'>Team</h2></div>";
            $cargo = "cargo_ing";
            global $sitepress;
            $lang='es';
            $sitepress->switch_lang($lang);
        }
        else
        {
            $abogadosr = "<div class='titulos'><h2 style='padding-top:0px;margin-top:0px;'>Equipo</h2></div>";
            $cargo = "cargo";
        }

		global $sitepress;
		$lang='es';
		$sitepress->switch_lang($lang);

        $abogados = get_field('abogados_relacionados','22667');
        $queryabogados = new WP_Query(array(
            'post_type'         => 'cv',
						//'suppress_filters' => false,
            'post__in'			=> $abogados,
            'post_status'		=> 'publish',
            'orderby'			=> 'menu_order',
            'order'				=> 'ASC',
            'posts_per_page'    => '-1'
        ));

        $abogadosr .= "<div class='abogadoslider'>";
        while ($queryabogados->have_posts() ) : $queryabogados->the_post();
            $AID=icl_object_id(get_the_ID(),'cv',true,'es');
            $abogadosr .= "<div class=".get_post_field( 'menu_order',$AID)."><a href='".get_permalink()."'><img width=200 height=240 src='".get_the_post_thumbnail_url($AID)."' /></a><a href='".get_permalink()."' class='nombre'>".get_the_title()."</a><span class='cargo'>".get_field($cargo)."</span></div>";
        endwhile;
        $abogadosr .= "</div>";
        wp_reset_query();
    }
        if(ICL_LANGUAGE_CODE=="en")
        {
		  $lang='en';
		  $sitepress->switch_lang($lang);
        }

    return $abogadosr;
}
/*
|--------------------------------------------------------------------------
| // MAX TITLE
|--------------------------------------------------------------------------
*/

add_filter( 'the_title', 'nine11day_modify_post_title' );
function nine11day_modify_post_title( $title ) {
    $maxspace = 120;
	if (strlen($title) > $maxspace and !is_single()) {
        $lugar = strpos($title, ' ',$maxspace);
        if ($lugar<>0){
            $title = substr($title,0,$lugar). "&hellip;";
        }
    }
	return $title;
}

/*
|--------------------------------------------------------------------------
| // CUSTOM SEARCH FORM <input type="hidden" name="cats" value="24,25,26,28,30,32,49,85" >
|--------------------------------------------------------------------------
*/
add_shortcode('searchform', 'rlv_search_form');
function rlv_search_form() {
    $url = get_site_url();
    if(ICL_LANGUAGE_CODE=="en"){
        $buscas="Who are you looking for?";
        $ordenar_por = "Listing by firm members";
        $ordenar_por2= "Team by industry / area";
        $volver="Back";
        $link="/en/practice-areas-and-industries/";
    }else{
        $buscas="¿A quién buscas?";
        $ordenar_por = "Ordenar por cargo";
        $volver="Volver";
        $ordenar_por2="Equipos por área / industria";
        $link="/areas-de-practica-e-industrias/";
    }
    $form = '<center class=search><form role="search" name="search_form" method="get" id="searchform" class="searchform" action="'.home_url( '/' ).'" ><input type="hidden" name="esconder" value=0 /><input type="text" placeholder="'.$buscas.'" value="'.get_search_query().'" name="s" id="s"><p class="text_centro patua letritas azul"><span id=letra_a>A</span> <span id=letra_b>B</span> <span id=letra_c>C</span> <span id=letra_d>D</span> <span id=letra_e>E</span> <span id=letra_f>F</span> <span id=letra_g>G</span> <span id=letra_h>H</span> <span id=letra_i>I</span> <span id=letra_j>J</span> <span id=letra_k>K</span> <span id=letra_l>L</span> <span id=letra_m>M</span> <span id=letra_n>N</span> <span id=letra_ñ>Ñ</span> <span id=letra_o>O</span> <span id=letra_p>P</span> <span id=letra_q>Q</span> <span id=letra_r>R</span> <span id=letra_s>S</span> <span id=letra_t>T</span> <span id=letra_u>U</span> <span id=letra_v>V</span> <span id=letra_w>W</span> <span id=letra_x>X</span> <span id=letra_y>Y</span> <span id=letra_z>Z</span></p></form><a href="#" class="azul boton_listado" name="cargo" id="selector_cargos">'.$ordenar_por.'</a><a href="#" class="azul escondido boton_listado" name="cargo" id="selector_cargos2" style="display:none;">'.$volver.'</a> <a href="'.$link.'" class="azul boton_listado" name="cargo" id="selector_cargos">'.$ordenar_por2.'</a>

    </center><br clear="all">';
    return $form;
}

add_shortcode('searchform_alert', 'rlv_search_form2');
function rlv_search_form2() {
    $url = get_site_url();
    if(ICL_LANGUAGE_CODE=="en"){
        $url_btn="http://reaction.carey.cl/reaction/RSGenPage.asp?RSID=Kqj81opWcpZM_7mQ_-E1S-BFKGsxC9ZjWn4SDHioP_8";
        $txt_btn="Subscribe to news alerts";
    }else{
        $url_btn="http://reaction.carey.cl/reaction/RSGenPage.asp?RSID=Kqj81opWcpZM_7mQ_-E1S-vUqv92YTgGjeTbKqAn8KY";
        $txt_btn="Suscribirme a news alerts";
    }
    $form = '<center class=search><form role="search" method="get" id="searchform" class="searchform" action="'.home_url( '/' ).'" ><input type="text" placeholder="" autofocus value="'.get_search_query().'" name="s" id="s"><a href="'.$url_btn.'" class="btn_azul" target="blank">'.$txt_btn.'</a><input type="hidden" name="esconder" value=1 /></form></center><br clear="all">';
    return $form;
}

// add featured thumbnail to admin post columns
function wpcs_add_thumbnail_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_thumb' => 'Thumbnail',
        'title' => 'Title',
        'author' => 'Author',
        'categories' => 'Categories',
        'tags' => 'Tags',
        'comments' => '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>',
        'date' => 'Date'
    );
    return $columns;
}

function wpcs_add_thumbnail_columns_data( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_thumb':
        echo '<a href="' . get_edit_post_link() . '">';
        echo the_post_thumbnail(array(110, 110));
        echo '</a>';
        break;
    }
}

if ( function_exists( 'add_theme_support' ) ) {
    add_filter( 'manage_posts_columns' , 'wpcs_add_thumbnail_columns' );
    add_action( 'manage_posts_custom_column' , 'wpcs_add_thumbnail_columns_data', 10, 2 );
    add_filter( 'manage_pages_columns' , 'wpcs_add_thumbnail_columns' );
    add_action( 'manage_pages_custom_column' , 'wpcs_add_thumbnail_columns_data', 10, 2 );
}


function resultado_busqueda($contador){

    $post_format = et_pb_post_format();
    $thumbnail_src = get_the_ID();
    $email = get_field('email_esp',get_the_ID());
    $idbusqueda=icl_object_id($thumbnail_src,'cv',true,"es");

    if(ICL_LANGUAGE_CODE=="en"){
        $url = get_the_permalink();
        $wpml_permalink = apply_filters( 'wpml_permalink', $url , 'en' );
        $cargo = strtoupper(get_field('cargo_ing',get_the_ID()));
        $vermas = "see more";
    }else{
        $wpml_permalink = get_the_permalink();

        $cargo = mb_strtoupper(get_field('cargo',get_the_ID()),'utf-8');
        $vermas = "ver +";
    }

    $resutado_html .= "<div class='resultado_busqueda'>";
    $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($idbusqueda,"medium"));

    if($contador>=6){
        $resutado_html .= "<a href=".get_the_permalink()."><img width='133px' height='166px' class='lazy' data-original='".$thumbnail_src[0]."' /></a>";
    }else{
        $resutado_html .= "<a href=".get_the_permalink()."><img width='133px' height='166px' src='".$thumbnail_src[0]."' /></a>";
    }
    $resutado_html .= "<article id=post-".get_the_ID()." ".get_post_class().">";

		if (get_the_ID() == 816){$jaimecareyhijo=" (Hijo)";}elseif (get_the_ID() == 23577){$jaimecareyhijo=", Jr.";}else{$jaimecareyhijo='';}

    $resutado_html .= "<h2 class='entry-title'><a href=".$wpml_permalink." class=azul>".get_field('nombre',get_the_ID()).$jaimecareyhijo."</a></h2>";
    $resutado_html .= "<div class=cargo>".$cargo."</div>";
    $resutado_html .= "<a href=mailto:".$email." class=emaillink>".$email."</a><br clear=all>";
    $resutado_html .= "<span class=telefonotxt>".get_field('telefono_esp',get_the_ID())."</span><br clear=all>";
    $resutado_html .= "<a href=".$wpml_permalink." class=vermaslink>".$vermas."</a>";
    $user = wp_get_current_user();
    $allowed_roles = array('editor', 'administrator', 'author');
    if( array_intersect($allowed_roles, $user->roles ) ) {
        $thispost = get_post(get_the_ID());
        $menu_order = $thispost->menu_order;
        $resutado_html .= "<br>Membrete:".$menu_order;
    }
    $resutado_html .= "</article></div><!-- .et_pb_post -->";

    return $resutado_html;

}

function fill_by_letter_array( $by_letter ) {
  $keys = range('a', 'z');
  $values = array_fill(0, count($keys), array());
  $empty = array_combine($keys, $values);
  return wp_parse_args( $by_letter, $empty);
}


/**
 * Order Admin Pages by Menu Order by Default
 *
 * Source:
 * http://wordpress.org/support/topic/sort-pages-by-date-in-admin-by-default?replies=4#post-5380257
 *
 */
add_filter('pre_get_posts', 'my_set_post_order_in_admin' );
function my_set_post_order_in_admin( $wp_query ) {
	global $pagenow;
	if ( is_admin() && $_GET['post_type'] == 'cv' && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {
		$wp_query->set( 'orderby', 'menu_order' );
		$wp_query->set( 'order', 'ASC' );
	}
}

/*
|--------------------------------------------------------------------------
| // AÑADIR ordenportada A QUICK EDIT
|--------------------------------------------------------------------------
*/

// Add to our admin_init function
add_filter('manage_cv_posts_columns', 'myown_add_post_columns');

function myown_add_post_columns($columns) {
    $columns['my_field'] = 'Orden Portada';
    return $columns;
}

// Add to our admin_init function
add_action('manage_posts_custom_column', 'myown_render_post_columns', 10, 2);

function myown_render_post_columns($column_name, $id) {
    switch ($column_name) {
    case 'my_field':
        // show my_field
        $my_fieldvalue = get_post_meta( $id, 'ordenportada', TRUE);
        echo $my_fieldvalue;
    }
}

// Add to our admin_init function
add_action('quick_edit_custom_box',  'myown_add_quick_edit', 10, 2);

function myown_add_quick_edit($column_name, $post_type) {
    if ($column_name != 'my_field') return;
    ?>
    <fieldset class="inline-edit-col-left">
        <div class="inline-edit-col">
            <span class="title">Orden de Portada</span>
            <input id="ordenportada_noncename" type="hidden" name="ordenportada_noncename" value="" />
            <input id="ordenportada" type="text" name="ordenportada" value="" />
        </div>
    </fieldset>
    <?php
}

// Add to our admin_init function
add_action('save_post', 'myown_save_quick_edit_data');

function myown_save_quick_edit_data($post_id) {
  // verify if this is an auto save routine.
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
      return $post_id;
  // Check permissions
  if ( 'cv' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return $post_id;
  }
  // Authentication passed now we save the data
  if (isset($_POST['ordenportada']) && ($post->post_type != 'revision')) {
        $my_fieldvalue = esc_attr($_POST['ordenportada']);
        if ($my_fieldvalue)
            update_post_meta( $post_id, 'ordenportada', $my_fieldvalue);
        else
            delete_post_meta( $post_id, 'ordenportada');
    }
    return $my_fieldvalue;
}

// Add to our admin_init function
add_action('admin_footer', 'myown_quick_edit_javascript');

function myown_quick_edit_javascript() {
    global $current_screen;
    if (($current_screen->post_type != 'cv')) return;

    ?>
        <script type="text/javascript">
            function set_ordenportada_value(fieldValue, nonce) {
                // refresh the quick menu properly
                inlineEditPost.revert();
                console.log(fieldValue);
                jQuery('#ordenportada').val(fieldValue);
            }

        </script>
        <?php
}

// Add to our admin_init function
add_filter('post_row_actions', 'myown_expand_quick_edit_link', 10, 2);
function myown_expand_quick_edit_link($actions, $post) {
    global $current_screen;
    if (($current_screen->post_type != 'cv'))
        return $actions;
    $nonce = wp_create_nonce( 'ordenportada_'.$post->ID);
    $myfielvalue = get_post_meta( $post->ID, 'ordenportada', TRUE);
    $actions['inline hide-if-no-js'] = '<a href="#" class="editinline" title="';
    $actions['inline hide-if-no-js'] .= esc_attr( __( 'Edit this item inline' ) ) . '"';
    $actions['inline hide-if-no-js'] .= " onclick=\"set_ordenportada_value('{$myfielvalue}')\" >";
    $actions['inline hide-if-no-js'] .= __( 'Quick Edit' );
    $actions['inline hide-if-no-js'] .= '</a>';
    return $actions;
}
//AÑADIR ordenportada A QUICK EDIT



/*
|--------------------------------------------------------------------------
| // CUSTOM SEARCH FORM
|--------------------------------------------------------------------------
*/
add_shortcode('nombres_na', 'nombresna');
function nombresna() {
    $nombres ="<br /><br /><ul class='newslaertul'>";

    foreach($posts as $post) :
      setup_postdata($post);

        $nombres .="<li><a href='".get_the_permalink()."' rel='bookmark'>".get_the_title()."</a><br /><b>";

		if (ICL_LANGUAGE_CODE == 'en') :
			$nombres .=the_field('cargo_ing');
		else :
			$nombres .=the_field('cargo');
		endif;

        $nombres .="</b><br />";
        $nombres .= get_the_field('telefono')."<br />";
        $nombres .= "<a href='mailto:".get_field('email_esp')."' style='color:#333;'>".get_field('email_esp')."</a></li>";
    endforeach;
    $nombres .="</ul>";
    return $nombres;
}

//RELEVANSSI

//SOLO INDEXA EN TITULO
add_filter('relevanssi_index_content', 'contentoff');
function contentoff() {
    return false;
}

add_filter('relevanssi_didyoumean_url', 'rlv_modify_didyoumean_url');
function rlv_modify_didyoumean_url($url) {
    $url = add_query_arg('esconder', $_GET['esconder'], $url);
    return $url;
}

/*
|--------------------------------------------------------------------------
| NUESTRO ESTUDIO HISTORIA
|--------------------------------------------------------------------------
*/

function myLang(){
    $lang = icl_get_languages('skip_missing=0');

    $item = "";
    if( ! empty( $lang ) ) {
        foreach( $lang as $la ){
            if( ! $la['active'] ) {
                $item .= $la['native_name'];
            }
        }
    }
    return $item;
}


function myLangselector(){
    $languages = icl_get_languages('skip_missing=0');

    $items = "";
    if( ! empty( $languages ) ) {
        foreach( $languages as $l ){
            if( ! $l['active'] ) {
                $items .= '<a href="' . $l['url'] . '" class="langmenu"> > ' . $l['native_name'] . '</a>';
            }
        }
    }
    return $items;
}

/*
|--------------------------------------------------------------------------
| // Elegant Thees on custom post tpe
|--------------------------------------------------------------------------
*/
add_filter( 'et_builder_post_types', 'my_et_builder_post_types' );
function my_et_builder_post_types( $post_types ) {
    $post_types[] = 'areas';
    //$post_types[] = 'ANOTHER_CPT_HERE';

    return $post_types;
}


add_shortcode('listado_letras','listado_letras');
function listado_letras(){

  wp_reset_postdata();

	$args = array(
		'post_type' => 'cv',
    'fields'         => 'ids',
		'posts_per_page' => '500',
    'orderby' => 'title',
    'order' => 'ASC',
	);
	$query = new WP_Query($args);
    $posts = $query->posts;

    $by_letter = array();
        while( $query->have_posts() ) { $query->the_post();
          global $post;
          $nombre = eliminar_tildes(get_the_title($post));
          $letter = strtolower(substr($nombre, 0, 1));

          if (!isset($by_letter[$letter])) {
              $by_letter[$letter] = array();
              $by_letter[$letter][] = $post;
          }else{
              $by_letter[$letter][] = $post;
          }
        }

      ksort($by_letter);
      $by_letter = fill_by_letter_array( $by_letter );
      //display_letters_anchors( array_keys( $by_letter ) );
      foreach( $by_letter as $letter => $posts ) {
        $listado_letras .="<div id='cv_".$letter."' class='".listado_letras."' style=display:none;>";
        if ( ! empty($posts) ) {
          $listado_letras .="<ul>";
          foreach ( $posts as $post ) {
            setup_postdata($post);

            if (get_the_ID() == 816){
							$listado_letras .="<li><a href='https://www.carey.cl/cv/jaime-carey/'>Carey, Jaime</a></li>";
							$listado_letras .="<li><a href='".get_permalink()."'>".get_the_title()." (Hijo)</a></li>";
						}elseif (get_the_ID() == 23577){
							$listado_letras .="<li><a href='https://www.carey.cl/en/resume/jaime-carey/'>Carey, Jaime</a></li>";
							$listado_letras .="<li><a href='".get_permalink()."'>".get_the_title().", Jr.</a></li>";
						}elseif(get_the_ID() == 962 or get_the_ID() == 19618){
							continue;
						}else{
							$listado_letras .="<li><a href='".get_permalink()."'>".get_the_title()."</a></li>";
						}

          }
         $listado_letras .="</ul>";
        } else {
               $listado_letras .='';
        }
        $listado_letras .="</div>";
      }

    return $listado_letras;
}

function eliminar_tildes($cadena){
        //Codificamos la cadena en formato utf8 en caso de que nos de errores
        //$cadena = utf8_encode($cadena);
        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena );
        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );
        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );
        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );
        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );
        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena );

        return $cadena;
}


/*
|--------------------------------------------------------------------------
| // COMPROBAR SI ES CHILD OF
|--------------------------------------------------------------------------

*/

function is_page_child($pid) {// $pid = The ID of the page we're looking for pages underneath
  global $post;         // load details about this page
  $anc = get_post_ancestors( $post->ID );
  foreach($anc as $ancestor) {
      if(is_page() && $ancestor == $pid) {
          return true;
      }
  }
  if(is_page()&&(is_page($pid)))
     return true;   // we're at the page or at a sub page
  else
      return false;  // we're elsewhere
};


/*
|--------------------------------------------------------------------------
| // ACF BIDIRECTIONAL
|--------------------------------------------------------------------------
*/


function bidirectional_acf_update_value( $value, $post_id, $field  ) {

	// vars
	$field_name = $field['name'];
	$field_key = $field['key'];
	$global_name = 'is_updating_' . $field_name;

	// bail early if this filter was triggered from the update_field() function called within the loop below
	// - this prevents an inifinte loop
	if( !empty($GLOBALS[ $global_name ]) ) return $value;

	// set global variable to avoid inifite loop
	// - could also remove_filter() then add_filter() again, but this is simpler
	$GLOBALS[ $global_name ] = 1;

	// loop over selected posts and add this $post_id
	if( is_array($value) ) {
		foreach( $value as $post_id2 ) {
			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);

			// allow for selected posts to not contain a value
			if( empty($value2) ) {
				$value2 = array();
			}

			// bail early if the current $post_id is already found in selected post's $value2
			if( in_array($post_id, $value2) ) continue;

			// append the current $post_id to the selected post's 'related_posts' value
			$value2[] = $post_id;

			// update the selected post's value (use field's key for performance)
			update_field($field_key, $value2, $post_id2);
		}
	}

	// find posts which have been removed
	$old_value = get_field($field_name, $post_id, false);

	if( is_array($old_value) ) {

		foreach( $old_value as $post_id2 ) {
			// bail early if this value has not been removed
			if( is_array($value) && in_array($post_id2, $value) ) continue;

			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);

			// bail early if no value
			if( empty($value2) ) continue;

			// find the position of $post_id within $value2 so we can remove it
			$pos = array_search($post_id, $value2);

			// remove
			unset( $value2[ $pos] );

			// update the un-selected post's value (use field's key for performance)
			update_field($field_key, $value2, $post_id2);
		}
	}

	// reset global varibale to allow this filter to function as per normal
	$GLOBALS[ $global_name ] = 0;

	// return
    return $value;
}
add_filter('acf/update_value/name=abogados_relacionados', 'bidirectional_acf_update_value', 10, 3);

/*
|--------------------------------------------------------------------------
| // POSTULACIONES ABOGADOS / PROCURADORES / PASANTIAS
|--------------------------------------------------------------------------
*/

add_filter("gform_column_input_1_14_1", "set_universsidades", 10, 44);
function set_universsidades($input_info, $field, $column, $value, $form_id){

    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Seleccione...", "value" => ""),
array("text" => "Pontificia Universidad Católica de Chile", "value" => "1"),
array("text" => "Pontificia Universidad Católica de Valparaíso", "value" => "2"),
array("text" => "Universidad Adolfo Ibáñez", "value" => "4"),
array("text" => "Universidad Adolfo Ibáñez, Viña del Mar", "value" => "5"),
array("text" => "Universidad Austral de Chile", "value" => "9"),
array("text" => "Universidad Católica de La Santísima Concepción", "value" => "14"),
array("text" => "Universidad Central de Chile", "value" => "18"),
array("text" => "Universidad de Chile", "value" => "26"),
array("text" => "Universidad de Concepción", "value" => "28"),
array("text" => "Universidad de Los Andes", "value" => "32"),
array("text" => "Universidad de Valparaíso", "value" => "40"),
array("text" => "Universidad del Desarrollo", "value" => "43"),
array("text" => "Universidad Diego Portales", "value" => "46"),
array("text" => "Universidad Finis Terrae", "value" => "47"),
array("text" => "Universidad Gabriela Mistral", "value" => "48"),
array("text" => "Universidad Nacional Andrés Bello", "value" => "57"),
array("text" => "*Otra universidad", "value" => "otra")
		));
}

add_filter("gform_column_input_1_14_2", "set_universsidades_estado", 10, 44);
function set_universsidades_estado($input_info, $field, $column, $value, $form_id){
    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Seleccione...", "value" => ""),
array("text" => "En curso", "value" => "2"),
array("text" => "Egresado", "value" => "3"),
array("text" => "Licenciado", "value" => "4"),
array("text" => "Titulado", "value" => "5")
		));
}


add_filter("gform_column_input_1_33_1", "set_interes", 10, 44);
function set_interes($input_info, $field, $column, $value, $form_id){

    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Seleccione...", "value" => "-"),
array("text" => "Aeronáutica", "value" => "67"),
array("text" => "Agroindustria", "value" => "68"),
array("text" => "Arbitrajes", "value" => "69"),
array("text" => "Banca y Finanzas", "value" => "70"),
array("text" => "Comercio Internacional y Aduanas", "value" => "71"),
array("text" => "Compliance y Anti-Corrupción", "value" => "72"),
array("text" => "Construcción e Ingeniería", "value" => "73"),
array("text" => "Contratación Pública", "value" => "74"),
array("text" => "Derecho Corporativo", "value" => "75"),
array("text" => "Derecho de Aguas", "value" => "76"),
array("text" => "Derecho Laboral", "value" => "77"),
array("text" => "Derecho Penal", "value" => "78"),
array("text" => "Derecho Público", "value" => "79"),
array("text" => "Derecho Tributario", "value" => "80"),
array("text" => "Derecho y Litigios Ambientales", "value" => "81"),
array("text" => "Empresas Familiares y Grupos Empresariales", "value" => "82"),
array("text" => "Energía", "value" => "83"),
array("text" => "Farmaceútica y Biotecnología", "value" => "84"),
array("text" => "Fusiones y Adquisiciones", "value" => "85"),
array("text" => "Hotelería y Juegos de Azar", "value" => "86"),
array("text" => "Infraestructura y Desarrollo de Proyectos", "value" => "87"),
array("text" => "Inmigración", "value" => "88"),
array("text" => "Inmobiliario", "value" => "89"),
array("text" => "Insolvencia, Quiebras y Reestructuraciones", "value" => "90"),
array("text" => "Libre Competencia y Mercados Regulados", "value" => "91"),
array("text" => "Licencias, Franquicias y Distribución", "value" => "92"),
array("text" => "Litigios", "value" => "93"),
array("text" => "Marítima y Portuaria", "value" => "94"),
array("text" => "Mercado de Capitales", "value" => "95"),
array("text" => "Minería", "value" => "96"),
array("text" => "Private Equity ", "value" => "97"),
array("text" => "Propiedad Intelectual y Tecnologías de la Información", "value" => "98"),
array("text" => "Protección de Datos Personales y Privacidad", "value" => "99"),
array("text" => "Publicidad y Derecho de Consumo", "value" => "100"),
array("text" => "Seguros y Reaseguros", "value" => "101"),
array("text" => "Telecomunicaciones, Medios y Tecnología", "value" => "102"),
array("text" => "Venture Capital y Formación de Fondos", "value" => "103")
		));
}

add_filter("gform_column_input_1_22_2", "set_idioma_nivel", 10, 44);
function set_idioma_nivel($input_info, $field, $column, $value, $form_id){

    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Nivel...", "value" => ""),
array("text" => "básico", "value" => "1"),
array("text" => "medio", "value" => "3"),
array("text" => "avanzado", "value" => "5"),
array("text" => "nativo", "value" => "6")
		));
}

add_filter("gform_column_input_1_22_1", "set_idioma", 10, 44);
function set_idioma($input_info, $field, $column, $value, $form_id){

    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Idioma...", "value" => ""),
array("text" => "Alemán", "value" => "1"),
array("text" => "Chino", "value" => "5"),
array("text" => "Español", "value" => "10"),
array("text" => "Francés", "value" => "13"),
array("text" => "Hebreo", "value" => "15"),
array("text" => "Inglés", "value" => "17"),
array("text" => "Italiano", "value" => "18"),
array("text" => "Japonés", "value" => "19"),
array("text" => "Portugués", "value" => "23"),
array("text" => "*Otros", "value" => "29")
		));
}

add_filter("gform_column_input_1_14_3", "set_universsidades_estudio", 10, 44);
function set_universsidades_estudio($input_info, $field, $column, $value, $form_id){

    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Seleccione", "value" => ""),
array("text" => "2017", "value" => "68"),
array("text" => "2016", "value" => "67"),
array("text" => "2015", "value" => "66"),
array("text" => "2014", "value" => "65"),
array("text" => "2013", "value" => "64"),
array("text" => "2012", "value" => "63"),
array("text" => "2011", "value" => "62"),
array("text" => "2010", "value" => "61"),
array("text" => "2009", "value" => "60"),
array("text" => "2008", "value" => "59"),
array("text" => "2007", "value" => "58"),
array("text" => "2006", "value" => "57"),
array("text" => "2005", "value" => "56"),
array("text" => "2004", "value" => "55"),
array("text" => "2003", "value" => "54"),
array("text" => "2002", "value" => "53"),
array("text" => "2001", "value" => "52"),
array("text" => "2000", "value" => "51"),
array("text" => "1999", "value" => "50"),
array("text" => "1998", "value" => "49"),
array("text" => "1997", "value" => "48"),
array("text" => "1996", "value" => "47"),
array("text" => "1995", "value" => "46"),
array("text" => "1994", "value" => "45"),
array("text" => "1993", "value" => "44"),
array("text" => "1992", "value" => "43"),
array("text" => "1991", "value" => "42"),
array("text" => "1990", "value" => "41"),
array("text" => "1989", "value" => "40"),
array("text" => "1988", "value" => "39"),
array("text" => "1987", "value" => "38"),
array("text" => "1986", "value" => "37"),
array("text" => "1985", "value" => "36"),
array("text" => "1984", "value" => "35"),
array("text" => "1983", "value" => "34"),
array("text" => "1982", "value" => "33"),
array("text" => "1981", "value" => "32"),
array("text" => "1980", "value" => "31"),
array("text" => "1979", "value" => "30"),
array("text" => "1978", "value" => "29"),
array("text" => "1977", "value" => "28"),
array("text" => "1976", "value" => "27"),
array("text" => "1975", "value" => "26"),
array("text" => "1974", "value" => "25"),
array("text" => "1973", "value" => "24"),
array("text" => "1972", "value" => "23"),
array("text" => "1971", "value" => "22"),
array("text" => "1970", "value" => "21")
		));
}

function set_universsidades_cursa($input_info, $field, $column, $value, $form_id){
    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Seleccione", "value" => ""),
array("text" => "1&#8304;", "value" => "1"),
array("text" => "2&#8304;", "value" => "2"),
array("text" => "3&#8304;", "value" => "3"),
array("text" => "4&#8304;", "value" => "4"),
array("text" => "5&#8304;", "value" => "5")
		));
}

function set_universsidades_estado_p($input_info, $field, $column, $value, $form_id){
    return array(
	"type" => "select",
	"choices" => array(
array("text" => "Seleccione...", "value" => ""),
array("text" => "En curso", "value" => "2"),
array("text" => "Egresado", "value" => "3")
		));
}

/*
|--------------------------------------------------------------------------
| // POSTULACIONES PROCURADORES
|--------------------------------------------------------------------------

*/

add_filter("gform_column_input_12_14_1", "set_universsidades", 10, 44);
add_filter("gform_column_input_12_14_2", "set_universsidades_estado_p", 10, 44);
add_filter("gform_column_input_12_33_1", "set_interes", 10, 44);
add_filter("gform_column_input_12_22_2", "set_idioma_nivel", 10, 44);
add_filter("gform_column_input_12_22_1", "set_idioma", 10, 44);
add_filter("gform_column_input_12_14_3", "set_universsidades_cursa", 10, 44);

/*
|--------------------------------------------------------------------------
| // POSTULACIONES PASANTIAS
|--------------------------------------------------------------------------

*/

add_filter("gform_column_input_14_14_1", "set_universsidades", 10, 44);
add_filter("gform_column_input_14_14_2", "set_universsidades_estado_p", 10, 44);
add_filter("gform_column_input_14_33_1", "set_interes", 10, 44);
add_filter("gform_column_input_14_22_2", "set_idioma_nivel", 10, 44);
add_filter("gform_column_input_14_22_1", "set_idioma", 10, 44);
add_filter("gform_column_input_14_14_3", "set_universsidades_cursa", 10, 44);


/*
|--------------------------------------------------------------------------
| // CUSTOM MODULE
|--------------------------------------------------------------------------

*/
function divi_child_theme_setup() {
    if ( ! class_exists('ET_Builder_Module') ) {
        return;
    }
    get_template_part( 'custom-modules/cfwpm' );
    $cfwpm = new Custom_ET_Builder_Module_Portfolio();
    remove_shortcode( 'et_pb_portfolio' );
    add_shortcode( 'et_pb_portfolio', array($cfwpm, '_shortcode_callback') );
}
add_action( 'wp', 'divi_child_theme_setup', 9999 );




/*
|--------------------------------------------------------------------------
| // NAVEGACION
|--------------------------------------------------------------------------

*/

function wpbeginner_numeric_posts_nav() {
    if( is_singular() )
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}



add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
    $admin_bar->add_menu( array(
			'id' => 'generar-ppt',
			'title' => 'Generar ppt',
			'href' => get_bloginfo('url').'/php2ppt/index.php?x=$2a$07$4/1D668/KJGJK8A1091I2.671FnSi4BTsn0ALzsq04EbYSA/dNyfy',
        'meta'  => array(
						'target' => '_blank',
        ),
    ));
}











/*
|--------------------------------------------------------------------------
| // EXTRACION ESPECIAL G
|--------------------------------------------------------------------------

*/

add_shortcode('listado_noticias','noticias');
function noticias(){
    global $post;
	$args = array(
		'post_type' => 'post',
        //'post_status' => 'publish',
        //'fields'         => 'ids',
        'suppress_filters' => false,
        'cat' => '25,32,49',
		'posts_per_page' => '-1',
        'orderby' => 'post_date',
        'order' => 'ASC',
	);

	$query = new WP_Query($args);
    //var_dump($query);

    while ( $query->have_posts() ) : $query->the_post();

        $thispost = get_post($post->ID);
        $menu_order = $thispost->menu_order;
        $id_ingles = icl_object_id($thispost->ID,'post',true,'en');


                //$pemios .= "UPDATE wp_posts SET post_date = '".$post->post_date."' where ID = ".$id_ingles.";<br>";
                //$pemios .= $thispost->ID.";".get_the_title().";".get_field('pdf').";".$menu_order.";".$id_ingles."<br>";
                $pemios .= $thispost->ID." ".get_the_excerpt()." <a href=".get_field('pdf')." target=blank>".get_the_title()."</a> - <a href=".get_permalink()." target=blank>link</a><br>";
                $pemios .= $id_ingles." ".get_the_excerpt($id_ingles)." <a href=".get_field('pdf',$id_ingles)." target=blank>".get_the_title($id_ingles)."</a> - <a href=".get_permalink($id_ingles)." target=blank>link</a><br>";
                //$pemios .= "UPDATE wp_postmeta SET meta_value = ;".get_field('ordenportada')."; WHERE post_id = ".$thispost->ID." and meta_key = 'ordenportada';<br>";
                $x++;

    endwhile;

    wp_reset_postdata();
	return $pemios;
}

?>
