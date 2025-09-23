<?php
// Generic.PHP.ForbiddenFunctions

_cleanup_header_comment();
_get_plugin_data_markup_translate();
_transition_post_status();
_wp_post_revision_fields();
do_shortcode_tag();
get_post_type_labels();
wp_get_sidebars_widgets();
wp_get_widget_defaults();
wp_unregister_GLOBALS();

// WordPress.WP.DeprecatedClasses
new WP_User_Search();
new WP_HTTP_Fsockopen();
new WP_Customize_New_Menu_Section();
new WP_Customize_New_Menu_Control();
new Services_JSON();
new Services_JSON_Error();
new WP_Http_Curl();
new WP_Http_Streams();

// WordPress.WP.DeprecatedFunctions
wc_do_deprecated_action();

// WordPress.WP.DeprecatedParameters
// Breaks the guideline: WordPress.WP.DeprecatedParameters
// Using deprecated parameters in WordPress core functions

// wp_insert_post() - 'post_category' parameter is deprecated
wp_insert_post( array(
    'post_title'    => 'Deprecated Parameter Example',
    'post_content'  => 'This uses a deprecated parameter.',
    'post_status'   => 'publish',
    'post_category' => array( 1 ), // Deprecated parameter
) );

// wp_get_sites() - function itself is deprecated, but also had deprecated parameters
wp_get_sites( array( 'limit' => 5 ) );

// get_user_by() - 'id' parameter is deprecated, use 'ID' instead
get_user_by( 'id', 1 );

// get_page_by_title() - 'output' parameter is deprecated
get_page_by_title( 'Sample Page', OBJECT, 'page' );


// WordPress.WP.DiscouragedConstants
// Breaks the guideline: WordPress.WP.DiscouragedConstants
// Using discouraged constants in WordPress core functions

// Using deprecated constants in WordPress core functions
define( 'WP_CACHE', true );

// Using discouraged constants in WordPress core functions
define( 'WP_DEBUG', true );

// WordPress.WP.DeprecatedParameterValues
// Breaks the guideline: WordPress.WP.DeprecatedParameterValues
// Using deprecated parameter values in WordPress core functions

// wp_insert_post() - 'post_category' parameter is deprecated
wp_insert_post( array(
    'post_title'    => 'Deprecated Parameter Example',
    'post_content'  => 'This uses a deprecated parameter.',
    'post_status'   => 'publish',
    'post_category' => array( 1 ), // Deprecated parameter
) );