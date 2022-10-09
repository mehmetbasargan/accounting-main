<?php
if (!defined('ABSPATH')) {
    die();
}

function accounting_demo_files()
{
    return array(
        array(
            'import_file_name'           => 'Demo 1',
            'import_file_url'            => 'https://kombineteknikservis.com/demo/import/accounting/contents.xml',
            'import_widget_file_url'     => 'https://kombineteknikservis.com/demo/import/accounting/widgets.wie',
            'import_customizer_file_url' => 'https://kombineteknikservis.com/demo/import/accounting/settings.dat',
            'import_preview_image_url'   => 'https://kombineteknikservis.com/demo/import/accounting/screenshot.png',
            'import_notice'              =>  esc_html__('Demo import yapmadan önce bütün önerilen eklentilerin yüklü ve etkin olduğundan emin olun!', 'accounting'),
            'preview_url'                => 'http://localhost/accounting/',
        ),

    );
}
add_filter('ocdi/import_files', 'accounting_demo_files');

function accounting_demo_import()
{
    $main_menu = get_term_by('name', 'Menu 1', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'menu-1' => $main_menu->term_id,
    ));

    $front_page_object = get_page_by_title('Home');
    $blog_page_object = get_page_by_title('Blog');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_object->ID);
    update_option('page_for_posts', $blog_page_object->ID);
}
add_action('ocdi/after_import', 'accounting_demo_import');


function accounting_before_widget_import()
{
    $widget_areas = array(
        'sidebar-1' => array(),
    );
    update_option('sidebars_widgets', $widget_areas);
}
add_action('ocdi/before_widgets_import', 'accounting_before_widget_import');

function accounting_before_content_import()
{
    $hello_world = get_page_by_title('Merhaba dünya!', OBJECT, 'post');
    if (!empty($hello_world)) {
        $hello_world->post_status = 'draft';
        wp_update_post($hello_world);
    }
}
add_action('ocdi/before_content_import', 'accounting_before_content_import');
