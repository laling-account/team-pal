<?php

/**
 * Theme functions for Group Professional Portfolio.
 */
if (!defined('ABSPATH')) {
    exit;
}


/* =========================================
   01. THEME SETUP....Supports title, thumbnails, HTML5, and navigation
========================================= */
function gpp_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'group-professional-portfolio')
    ));
}
add_action('after_setup_theme', 'gpp_theme_setup');


/* =========================================
   02. HELPER: ENQUEUE CSS FILE....Checks file existence and uses filemtime()
========================================= */
function gpp_enqueue_css_file($handle, $relative_path, $dependencies = array())
{
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    $file_path = $theme_path . $relative_path;
    $file_uri  = $theme_uri . $relative_path;

    if (file_exists($file_path)) {
        wp_enqueue_style(
            $handle,
            $file_uri,
            $dependencies,
            filemtime($file_path)
        );
    }
}


/* =========================================
   03. HELPER: ENQUEUE JAVASCRIPT FILE....Correctly enqueues scripts in the footer
========================================= */
function gpp_enqueue_js_file($handle, $relative_path, $dependencies = array())
{
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    $file_path = $theme_path . $relative_path;
    $file_uri  = $theme_uri . $relative_path;

    if (file_exists($file_path)) {
        wp_enqueue_script(
            $handle,
            $file_uri,
            $dependencies,
            filemtime($file_path),
            true
        );
    }
}

/* =========================================
   04. SHARED MEMBER INFORMATION....Four members with updated roles and image paths
   Used by:
   - front-page.php
   - Individual member portfolio templates
========================================= */
function gpp_get_member_data($member_slug)
{
    $members = array(

        /* =================================
           MEMBER 1
        ================================= */
        'member-one' => array(
            'name' => 'Crislyn P. Dablio',
            'role' => 'Technical Writer',
            'image' => get_template_directory_uri() . '/assets/images/members/dabdab.jpg',
            'description' => 'Responsible for planning, organizing, and managing project activities. Ensures that team members coordinate effectively and complete their assigned tasks on time.',
            'url' => home_url('/members/member-one/')
        ),

        /* =================================
           MEMBER 2
        ================================= */
        'member-two' => array(
            'name' => 'Evan Jester Z. Fabria',
            'role' => 'Project Manager',
            'image' => get_template_directory_uri() . '/assets/images/members/evan.jpg',
            'description' => 'Responsible for planning, organizing, and managing project activities. Ensures that team members coordinate effectively and complete their assigned tasks on time.',
            'url' => home_url('/members/member-two/')
        ),

        /* =================================
           MEMBER 3
        ================================= */
        'member-three' => array(
            'name' => 'Dongards B. Mabao',
            'role' => 'Programmer',
            'image' => get_template_directory_uri() . '/assets/images/members/ngardex.jpg',
            'description' => 'Responsible for developing and maintaining the system. Focuses on programming, database integration, user interface development, and system functionality.',
            'url' => home_url('/members/member-three/')
        ),


        /* =================================
           MEMBER 4
        ================================= */
        'member-four' => array(
            'name' => 'Norlyn M. Teves',
            'role' => 'System Analyst',
            'image' => get_template_directory_uri() . '/assets/images/members/norlyn.jpg',
            'description' => 'Responsible for analyzing system requirements, identifying user needs, and evaluating system processes to ensure that the project meets its objectives.',
            'url' => home_url('/members/member-four/')
        ),

    );
    return isset($members[$member_slug])
        ? $members[$member_slug]
        : null;
}


/* =========================================
   05. ENQUEUE CSS AND JAVASCRIPT....Loads homepage and individual member assets
========================================= */
function gpp_enqueue_assets()
{
    /* =====================================
       MAIN THEME CSS
    ===================================== */
    gpp_enqueue_css_file(
        'gpp-style',
        '/style.css'
    );

    /* =====================================
       HOMEPAGE CSS
    ===================================== */
    if (is_front_page()) {

        // Homepage Header CSS
        gpp_enqueue_css_file(
            'gpp-homepage-header',
            '/assets/css/homepage/header.css',
            array('gpp-style')
        );

        // Homepage Body CSS
        gpp_enqueue_css_file(
            'gpp-homepage-body',
            '/assets/css/homepage/body.css',
            array('gpp-homepage-header')
        );

        // Homepage Footer CSS
        gpp_enqueue_css_file(
            'gpp-homepage-footer',
            '/assets/css/homepage/footer.css',
            array('gpp-homepage-body')
        );
    }

    /* =====================================
       INDIVIDUAL MEMBER CSS AND JAVASCRIPT
    ===================================== */
    if (is_singular('portfolio_member')) {

        // Get current WordPress member slug.
        $member_slug = get_post_field(
            'post_name',
            get_queried_object_id()
        );
        $allowed_members = array(
            'member-one',
            'member-two',
            'member-three',
            'member-four'
        );
        if (in_array($member_slug, $allowed_members, true)) {

            /* =================================
               MEMBER HEADER CSS
            ================================= */
            gpp_enqueue_css_file(
                'gpp-' . $member_slug . '-header',
                '/assets/css/' . $member_slug . '/header.css',
                array('gpp-style')
            );

            /* =================================
               MEMBER PORTFOLIO CSS
            ================================= */
            gpp_enqueue_css_file(
                'gpp-' . $member_slug . '-portfolio',
                '/assets/css/' . $member_slug . '/portfolio.css',
                array('gpp-' . $member_slug . '-header')
            );

            /* =================================
               MEMBER FOOTER CSS
            ================================= */
            gpp_enqueue_css_file(
                'gpp-' . $member_slug . '-footer',
                '/assets/css/' . $member_slug . '/footer.css',
                array('gpp-' . $member_slug . '-portfolio')
            );

            /* =================================
               MEMBER HEADER JAVASCRIPT
            ================================= */
            gpp_enqueue_js_file(
                'gpp-' . $member_slug . '-header-js',
                '/assets/js/' . $member_slug . '/header.js'
            );

            /* =================================
               MEMBER PORTFOLIO JAVASCRIPT
            ================================= */
            gpp_enqueue_js_file(
                'gpp-' . $member_slug . '-portfolio-js',
                '/assets/js/' . $member_slug . '/portfolio.js'
            );

            /* =================================
               MEMBER FOOTER JAVASCRIPT
            ================================= */
            gpp_enqueue_js_file(
                'gpp-' . $member_slug . '-footer-js',
                '/assets/js/' . $member_slug . '/footer.js'
            );
        }
    }

    /* =====================================
       MAIN WEBSITE JAVASCRIPT

       Loads on non-member pages.
    ===================================== */ else {
        gpp_enqueue_js_file(
            'gpp-script',
            '/assets/js/theme.js'
        );
    }
}
add_action('wp_enqueue_scripts', 'gpp_enqueue_assets');

/* =========================================
   06. REGISTER PORTFOLIO MEMBER POST TYPE....Registers portfolio_member
========================================= */
function gpp_register_member_type()
{
    $labels = array(
        'name'          => __('Portfolio Members', 'group-professional-portfolio'),
        'singular_name' => __('Portfolio Member', 'group-professional-portfolio'),
        'add_new_item'  => __('Add New Member', 'group-professional-portfolio'),
        'edit_item'     => __('Edit Member Portfolio', 'group-professional-portfolio'),
        'all_items'     => __('All Members', 'group-professional-portfolio'),
    );
    register_post_type('portfolio_member', array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        'rewrite' => array(
            'slug' => 'members',
            'with_front' => false
        ),
        'show_in_rest' => true,
    ));
}
add_action('init', 'gpp_register_member_type');

/* =========================================
   07. CREATE MISSING SAMPLE MEMBERS....Creates missing records without overwriting existing content
   Important:
   - Creates members that do not exist.
   - Migrates old slugs to new slugs.
   - Does not overwrite existing content.
========================================= */
function gpp_seed_sample_members()
{
    $samples = array(

        /* =================================
           MEMBER 1
        ================================= */
        array(
            'slug' => 'member-one',
            'title' => 'Crislyn P. Dablio',
            'excerpt' => 'Technical Writer',
        ),

        /* =================================
           MEMBER 2
        ================================= */
        array(
            'slug' => 'member-two',
            'title' => 'Evan Jester Z. Fabria',
            'excerpt' => 'Project Manager',
        ),

        /* =================================
           MEMBER 3
        ================================= */
        array(
            'slug' => 'member-three',
            'title' => 'Dongards B.Mabao',
            'excerpt' => 'Programmer',
        ),

        /* =================================
           MEMBER 4
        ================================= */
        array(
            'slug' => 'member-four',
            'title' => 'Norlyn M. Teves',
            'excerpt' => 'System Analyst',
        ),
    );


    /* =====================================
       CREATE OR MIGRATE MEMBER RECORDS
    ===================================== */
    foreach ($samples as $sample) {
        // Search using the new slug.
        $existing = get_page_by_path(
            $sample['slug'],
            OBJECT,
            'portfolio_member'
        );

        // If not found, check the previous slug.
        if (!$existing) {

            $existing = get_page_by_path(
                $sample['old_slug'],
                OBJECT,
                'portfolio_member'
            );
        }

        // Existing member: only update the slug if needed.
        if ($existing) {
            if ($existing->post_name !== $sample['slug']) {
                wp_update_post(array(
                    'ID' => $existing->ID,
                    'post_name' => $sample['slug']
                ));
            }
            // Do not overwrite existing member information.
            continue;
        }

        // Create a new member only when it does not exist.
        $post_data = array(
            'post_type' => 'portfolio_member',
            'post_status' => 'publish',
            'post_name' => $sample['slug'],
            'post_title' => $sample['title'],
            'post_excerpt' => $sample['excerpt'],
        );

        wp_insert_post($post_data);
    }
}
add_action('after_switch_theme', 'gpp_seed_sample_members');

/* =========================================
   08. GET MEMBER ROLE....Retrieves the role from the post excerpt
========================================= */
function gpp_get_member_role($post_id)
{
    $excerpt = get_the_excerpt($post_id);
    return $excerpt
        ? $excerpt
        : __('Portfolio Member', 'group-professional-portfolio');
}

function gpp_member_page_title( $title ) {

    if ( is_singular( 'portfolio_member' ) ) {

        $member_slug = get_post_field(
            'post_name',
            get_queried_object_id()
        );

        $member_data = gpp_get_member_data( $member_slug );

        if ( $member_data ) {
            return $member_data['name'];
        }
    }

    return $title;
}

add_filter( 'pre_get_document_title', 'gpp_member_page_title' );

function gpp_enqueue_fontawesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
        array(),
        '6.7.2'
    );
}
add_action('wp_enqueue_scripts', 'gpp_enqueue_fontawesome');