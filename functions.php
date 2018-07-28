<?php

    function webCrafters_files() {
        wp_enqueue_script('main_javascript', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);
        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        // Two args required
        // First is name for stylesheet for ref
        // Second is location of file
        wp_enqueue_style('webCrafter_main_styles', get_stylesheet_uri());
    }

    function webCrafters_titles() {
        //Enable feature for theme
        //which feature is arg
        //can be adjusted in settings page of wordpress dash
        add_theme_support('title-tag');
    }

    // Two args required
    // First arg tells when to run (wp hook)
    // Second arg tells what func to run
    add_action('wp_enqueue_scripts', 'webCrafters_files');
    add_action('after_setup_theme', 'webCrafters_titles');

?>