<?php
get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

echo do_shortcode('[et_pb_section global_module="17898"][/et_pb_section]');
get_footer();
?>
