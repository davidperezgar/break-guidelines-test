<?php
wp_enqueue( 'foo-script', 'https://cdn.jsdelivr.net/awesome-script/foo/bar.js', array(), '1.0.0', true );

function climb_content_enqueue_scripts()
{

    $plugin_version = MY_PLUGIN_VERSION; // Assuming MY_PLUGIN_VERSION is defined


 // Enqueue Bootstrap styles, Bootstrap JS, and its dependency Popper.js
 wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), $plugin_version);
 wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), $plugin_version, true);
 wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper-js'), $plugin_version, true);
 wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), $plugin_version);

 
 wp_enqueue_script('tailwind-css', 'https://cdn.tailwindcss.com', array(), $plugin_version, true);
 wp_enqueue_script('uikit-js', 'https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit.min.js', array(), $plugin_version, true);
 wp_enqueue_script('uikit-icons-js', 'https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit-icons.min.js', array('uikit-js'), $plugin_version, true);

 // Charting and Visualization
 wp_enqueue_script('chartjs', 'https://cdn.jsdelivr.net/npm/chart.js', array(), $plugin_version, true);


}

add_action('enqueue_block_editor_assets', 'climb_content_enqueue_scripts');