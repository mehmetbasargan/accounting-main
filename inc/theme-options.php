<?php
if (!defined('ABSPATH')) {
    return;
}

if (!class_exists('Kirki')) {
    return;
}

Kirki::add_config('accounting', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

// Header Ayarları
Kirki::add_section('accounting_header_settings', array(
    'title'    => esc_html__('Header Settings', 'accounting'),
    'icon'     => 'dashicons-align-center',
    'priority' => 1,
));

// Header Phone
Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'accounting_phone',
    'label'    => esc_html__('Phone Number', 'accounting'),
    'section'  => 'accounting_header_settings',
    'default'  => '+90 0000 000 00 00',
    'priority' => 1,
]);

// Header E-posta
Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'accounting_mail',
    'label'    => esc_html__('Email', 'accounting'),
    'section'  => 'accounting_header_settings',
    'default'  => ' youremail@email.com',
    'priority' => 2,
]);

// Header Sosyal Medya
Kirki::add_field('accounting', [
    'type'        => 'repeater',
    'priority' => 3,
    'label'       => esc_html__(
        'Social Media Icons',
        'accounting'
    ),
    'section'     => 'accounting_header_settings',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Icon', 'accounting'),
    ],
    'button_label' => esc_html__('Add New', 'accounting'),
    'settings'     => 'social_icon_setting',
    'fields' => [
        'social_icon' => [
            'type'        => 'text',
            'label'       => esc_html__('Social İcon', 'accounting'),
            'description' => esc_html__('Add Social Media Icon', 'accounting'),
        ],
        'social_url'  => [
            'type'        => 'text',
            'label'       => esc_html__('Social Media Link', 'accounting'),
            'description' => esc_html__('Add Social Media Link', 'accounting'),
        ],
    ]
]);

Kirki::add_field('accounting', [
    'type'        => 'switch',
    'settings'    => 'top_bar_setting',
    'label'       => esc_html__('Show / Hide Top Bar Section', 'accounting'),
    'section'     => 'accounting_header_settings',
    'default'     => 'on',
    'priority'    => 4,
    'choices'     => [
        'on'  => esc_html__('Show', 'accounting'),
        'off' => esc_html__('Hide', 'accounting'),
    ],
]);

// Renk Şeması
Kirki::add_field('accounting', [
    'type'        => 'color',
    'settings'    => 'accounting_general_color',
    'label'       => __('Color Chart', 'accounting'),
    'section'     => 'colors',
    'default'     => '#1ba12d',
    'priority' => 1,
]);

Kirki::add_section('colors', array(
    'title'    => esc_html__('Colors'),
    'icon'     => 'dashicons-admin-appearance',
    'priority' => 1,
));

// Ana Sayfa Ayarları
Kirki::add_panel('ana_sayfa_ayarları', array(
    'priority'    => 1,
    'title'       => esc_html__('Home Settings', 'accounting'),
    'icon'        => 'dashicons-admin-home',
));

// Slayt
Kirki::add_section('slider_section', array(
    'title'          => esc_html__('Home Slide', 'accounting'),
    'panel'          => 'ana_sayfa_ayarları',
    'priority'       => 1,
));

Kirki::add_field('accounting', [
    'type'        => 'repeater',
    'label'       => esc_html__('Add Slide', 'accounting'),
    'section'     => 'slider_section',
    'priority'    => 1,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Slayt', 'accounting'),
    ],
    'button_label' => esc_html__('Add New', 'accounting'),
    'settings'     => 'slider_settings',
    'fields' => [
        'slider_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Slide Image', 'accounting'),
            'description' => esc_html__('Please Select Image', 'accounting'),
        ],
        'little_title' => [
            'type'        => 'text',
            'label'       => esc_html__('Small Title', 'accounting'),
            'description' => esc_html__('Please Add Small Title', 'accounting'),
        ],
        'big_title'  => [
            'type'        => 'text',
            'label'       => esc_html__('Big Title', 'accounting'),
            'description' => esc_html__('Please Add a Large Title', 'accounting'),
        ],
        'title_btn'  => [
            'type'        => 'text',
            'label'       => esc_html__('Button Title', 'accounting'),
            'description' => esc_html__('Please Add Button Title', 'accounting'),
        ],
        'title_btn_link'  => [
            'type'        => 'text',
            'label'       => esc_html__('Button Link', 'accounting'),
            'description' => esc_html__('Add Button Link', 'accounting'),
        ],
    ]
]);

// Hoş Geldin
Kirki::add_section('home_section', array(
    'title'          => esc_html__('Welcome', 'accounting'),
    'panel'          => 'ana_sayfa_ayarları',
    'priority'       => 1,
));

Kirki::add_field('accounting', [
    'type'        => 'image',
    'settings'    => 'welcome_img',
    'label'       => esc_html__('Please Add Image', 'accounting'),
    'section'     => 'home_section',
    'priority' => 1,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'welcome_little_title',
    'label'    => esc_html__('Please Add Small Title', 'accounting'),
    'section'  => 'home_section',
    'priority' => 2,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'welcome_big_title',
    'label'    => esc_html__('Please Add a Large Title', 'accounting'),
    'section'  => 'home_section',
    'priority' => 3,
]);

Kirki::add_field('accounting', [
    'type'        => 'editor',
    'settings'    => 'welcome_text_edit',
    'label'       => esc_html__('Please Add Text', 'accounting'),
    'section'     => 'home_section',
    'priority'    => 4,
]);

Kirki::add_field('accounting', [
    'type'        => 'switch',
    'settings'    => 'welcome_setting',
    'label'       => esc_html__('Show / Hide Welcome Section', 'accounting'),
    'section'     => 'home_section',
    'default'     => 'on',
    'priority'    => 5,
    'choices'     => [
        'on'  => esc_html__('Show', 'accounting'),
        'off' => esc_html__('Hide', 'accounting'),
    ],
]);


// Sayaç
Kirki::add_section('counter_section', array(
    'title'          => esc_html__('Counter', 'accounting'),
    'panel'          => 'ana_sayfa_ayarları',
    'priority'       => 1,
));

// Bölüm 1
Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'years_of_experience_title',
    'label'    => esc_html__('Please Add Title (Part 1)', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 1,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'years_of_experience_number',
    'label'    => esc_html__('Please Add Number', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 2,
]);

// Bölüm 2
Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'cases_completed_title',
    'label'    => esc_html__('Please Add Title (Part 2)', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 3,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'cases_completed_number',
    'label'    => esc_html__('Please Add Number', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 4,
]);

// Bölüm 3
Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'adwards_title',
    'label'    => esc_html__('Please Add Title (Part 3)', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 5,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'adwards_number',
    'label'    => esc_html__('Please Add Number', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 6,
]);

// Bölüm 4
Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'expert_consultant_title',
    'label'    => esc_html__('Please Add Title (Chapter 4)', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 7,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'expert_consultant_number',
    'label'    => esc_html__('Please Add Number', 'accounting'),
    'section'  => 'counter_section',
    'priority' => 8,
]);

Kirki::add_field('accounting', [
    'type'        => 'switch',
    'settings'    => 'counter_setting',
    'label'       => esc_html__('Show / Hide Counter Section', 'accounting'),
    'section'     => 'counter_section',
    'default'     => 'on',
    'priority'    => 9,
    'choices'     => [
        'on'  => esc_html__('Show', 'accounting'),
        'off' => esc_html__('Hide', 'accounting'),
    ],
]);


// Testimonials
Kirki::add_section('testimonies_section', array(
    'title'          => esc_html__('Testimonials', 'accounting'),
    'panel'          => 'ana_sayfa_ayarları',
    'priority'       => 1,
));

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'testimonies_little_title',
    'label'    => esc_html__('Please Add Small Title', 'accounting'),
    'section'  => 'testimonies_section',
    'priority' => 1,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'testimonies_big_title',
    'label'    => esc_html__('Please Add a Large Title', 'accounting'),
    'section'  => 'testimonies_section',
    'priority' => 2,
]);

Kirki::add_field('accounting', [
    'type'        => 'repeater',
    'label'       => esc_html__('Testimonials Slide', 'accounting'),
    'section'     => 'testimonies_section',
    'priority'    => 3,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Slayt', 'accounting'),
    ],
    'button_label' => esc_html__('Add New', 'accounting'),
    'settings'     => 'testimonies_setting',
    'fields' => [
        'testimonies_text' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Testimonials Description', 'accounting'),
            'priority'    => 1,
        ],
        'testimonies_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Testimonials Visual', 'accounting'),
            'priority'    => 2,
        ],
        'testimonies_title'  => [
            'type'        => 'text',
            'label'       => esc_html__('Testimonials Title', 'accounting'),
            'priority'    => 3,
        ],
        'testimonies_sub_title'  => [
            'type'        => 'text',
            'label'       => esc_html__('Testimonials Subtitle', 'accounting'),
            'priority'    => 4,
        ],
    ]
]);

Kirki::add_field('accounting', [
    'type'        => 'switch',
    'settings'    => 'testimonies_switch_setting',
    'label'       => esc_html__('Show / Hide Testimonials Section', 'accounting'),
    'section'     => 'testimonies_section',
    'default'     => 'on',
    'priority'    => 4,
    'choices'     => [
        'on'  => esc_html__('Show', 'accounting'),
        'off' => esc_html__('Hide', 'accounting'),
    ],
]);


// FAQS Sık Sorulan Sorular
Kirki::add_section('faqs_section', array(
    'title'          => esc_html__('FAQS', 'accounting'),
    'panel'          => 'ana_sayfa_ayarları',
    'priority'       => 1,
));

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'faqs_little_title',
    'label'    => esc_html__('Please Add Small Title', 'accounting'),
    'section'  => 'faqs_section',
    'priority' => 1,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'faqs_big_title',
    'label'    => esc_html__('Please Add a Large Title', 'accounting'),
    'section'  => 'faqs_section',
    'priority' => 2,
]);

Kirki::add_field('accounting', [
    'type'     => 'textarea',
    'settings' => 'faqs_content',
    'label'    => esc_html__('Please Add Content', 'accounting'),
    'section'  => 'faqs_section',
    'priority' => 3,
]);

Kirki::add_field('accounting', [
    'type'        => 'image',
    'settings'    => 'faqs_img1',
    'label'       => esc_html__('Please Add Image', 'accounting'),
    'section'     => 'faqs_section',
    'priority' => 4,
]);

Kirki::add_field('accounting', [
    'type'        => 'image',
    'settings'    => 'faqs_img2',
    'label'       => esc_html__('Please Add Image', 'accounting'),
    'section'     => 'faqs_section',
    'priority' => 5,
]);


Kirki::add_field('accounting', [
    'type'        => 'repeater',
    'label'       => esc_html__('FAQS Accordion', 'accounting'),
    'section'     => 'faqs_section',
    'priority'    => 6,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Section', 'accounting'),
    ],
    'button_label' => esc_html__('Add New', 'accounting'),
    'settings'     => 'faqs_setting',
    'fields' => [
        'faqs_section_title' => [
            'type'        => 'text',
            'label'       => esc_html__('Section Title', 'accounting'),
            'priority'    => 1,
        ],
        'faqs_section_content'  => [
            'type'        => 'textarea',
            'label'       => esc_html__('Section Content', 'accounting'),
            'priority'    => 2,
        ],

    ]
]);

Kirki::add_field('accounting', [
    'type'        => 'switch',
    'settings'    => 'faqs_switch_setting',
    'label'       => esc_html__('Show / Hide FAQS Section', 'accounting'),
    'section'     => 'faqs_section',
    'default'     => 'on',
    'priority'    => 7,
    'choices'     => [
        'on'  => esc_html__('Show', 'accounting'),
        'off' => esc_html__('Hide', 'accounting'),
    ],
]);


// Ana Sayfa Custom Blogs
Kirki::add_section('custom_blogs_section', array(
    'title'          => esc_html__('Custom Blogs', 'accounting'),
    'panel'          => 'ana_sayfa_ayarları',
    'priority'       => 1,
));

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'blogs_little_title',
    'label'    => esc_html__('Please Add Small Title', 'accounting'),
    'section'  => 'custom_blogs_section',
    'priority' => 1,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'blogs_big_title',
    'label'    => esc_html__('Please Add a Large Title', 'accounting'),
    'section'  => 'custom_blogs_section',
    'priority' => 2,
]);

Kirki::add_field('accounting', [
    'type'        => 'switch',
    'settings'    => 'blogs_switch_setting',
    'label'       => esc_html__('Show / Hide Custom Blogs Section', 'accounting'),
    'section'     => 'custom_blogs_section',
    'default'     => 'on',
    'priority'    => 3,
    'choices'     => [
        'on'  => esc_html__('Show', 'accounting'),
        'off' => esc_html__('Hide', 'accounting'),
    ],
]);


// İletişim
Kirki::add_panel('iletisim_sayfasi', array(
    'priority'    => 6,
    'title'       => esc_html__('Contact Page', 'accounting'),
    'icon'        => 'dashicons-phone',
));

// İletişim Bilgileri
Kirki::add_section('contact_section', array(
    'title'          => esc_html__('Contact Information', 'accounting'),
    'panel'          => 'iletisim_sayfasi',
    'priority'       => 1,
));

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'contact_title',
    'label'    => esc_html__('Please Add a Large Title', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 1,
]);

Kirki::add_field('accounting', [
    'type'     => 'textarea',
    'settings' => 'contact_text',
    'label'    => esc_html__('Please Enter Description', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 2,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'contact_address',
    'label'    => esc_html__('Please Enter Address', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 3,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'contact_phone',
    'label'    => esc_html__('Please Enter Phone', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 4,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'contact_mail',
    'label'    => esc_html__('Please Enter Email', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 5,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'contact_website',
    'label'    => esc_html__('Please Add Website', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 6,
]);

Kirki::add_field('accounting', [
    'type'     => 'text',
    'settings' => 'contact_form_title',
    'label'    => esc_html__('Please Add Form Title', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 7,
]);

Kirki::add_field('accounting', [
    'type'     => 'textarea',
    'settings' => 'contact_form_text',
    'label'    => esc_html__('Please Enter Description', 'accounting'),
    'section'  => 'contact_section',
    'priority' => 8,
]);

// Google Map
Kirki::add_section('contact_map_section', array(
    'title'          => esc_html__('Google Map', 'accounting'),
    'panel'          => 'iletisim_sayfasi',
    'priority'       => 2,
));

Kirki::add_field('accounting', [
    'type'        => 'code',
    'settings'    => 'google_map',
    'label'       => esc_html__('Google Maps', 'accounting'),
    'description' => esc_html__('Lütfen Google Maps Kodunuzu Ekleyin', 'accounting'),
    'section'     => 'contact_map_section',
    'choices'     => [
        'language' => 'html',
    ],
]);
