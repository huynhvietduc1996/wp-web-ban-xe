<?php 

// function tao_custom_post_type()
// {


//     /*
//      * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
//      */
//     $label = array(
//         'name' => 'Ảnh slider', //Tên post type dạng số nhiều
//         'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
//     );


//     /*
//      * Biến $args là những tham số quan trọng trong Post Type
//      */
//     $args = array(
//         'labels' => $label, //Gọi các label trong biến $label ở trên
//         'description' => 'Post type đăng sản phẩm', //Mô tả của post type
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'author',
//             'thumbnail',
//             'comments',
//             'trackbacks',
//             'revisions',
//             'custom-fields'
//         ), //Các tính năng được hỗ trợ trong post type
//         //'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
//         'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
//         'public' => true, //Kích hoạt post type
//         'show_ui' => true, //Hiển thị khung quản trị như Post/Page
//         'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
//         'show_in_nav_menus' => false, //Hiển thị trong Appearance -> Menus
//         'show_in_admin_bar' => false, //Hiển thị trên thanh Admin bar màu đen.
//         'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
//         'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
//         'can_export' => true, //Có thể export nội dung bằng Tools -> Export
//         'has_archive' => true, //Cho phép lưu trữ (month, date, year)
//         'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
//         'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
//         'capability_type' => 'post' //
//     );


//     register_post_type('product', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên

// }
// /* Kích hoạt hàm tạo custom post type */
// add_action('init', 'tao_custom_post_type');

function my_cptui_featured_image_support() {
	// Replace these post type slugs with the actual slugs you need support for.
	$cptui_post_types = array( 'slider', 'dich-vu', 'san-pham', 'post');
	add_theme_support( 'post-thumbnails', $cptui_post_types );
}
add_action( 'after_setup_theme', 'my_cptui_featured_image_support' );


function register_my_menu() {
    register_nav_menu('header-menu',__('Menu chính'));
}
add_action('init', 'register_my_menu');

add_filter('use_block_editor_for_post', '__return_false');