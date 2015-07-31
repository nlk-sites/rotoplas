<?php
	
	/* Products */
	$labels = array(
		'name'                => _x( 'Products', 'Products', 'garber' ),
		'singular_name'       => _x( 'Product', 'Products', 'garber' ),
		'menu_name'           => __( 'Products', '' ),
		'parent_item_colon'   => __( 'Parent Product', 'garber' ),
		'all_items'           => __( 'All Products', 'garber' ),
		'view_item'           => __( 'View Vehicle New Special', 'garber' ),
		'add_new_item'        => __( 'Add Product', 'garber' ),
		'add_new'             => __( 'Add New', 'garber' ),
		'edit_item'           => __( 'Edit Product', 'garber' ),
		'update_item'         => __( 'Update Product', 'garber' ),
		'search_items'        => __( 'Search Products', 'garber' ),
		'not_found'           => __( 'Not Found', 'garber' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'garber' ),
	);
		
	$args = array(
		'label'               => __( 'Product', 'garber' ),
		'description'         => __( 'Products', 'garber' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	register_post_type( 'product', $args );
	
	$labels = array(
		'name'              => _x( 'Product Categories', 'Product Categories' ),
		'singular_name'     => _x( 'Product Category', 'Product Category' ),
		'search_items'      => __( 'Search Product Categories' ),
		'all_items'         => __( 'All Product Categories' ),
		'parent_item'       => __( 'Parent Product Category' ),
		'parent_item_colon' => __( 'Parent Product Category:' ),
		'edit_item'         => __( 'Edit Product Category' ),
		'update_item'       => __( 'Update Product Category' ),
		'add_new_item'      => __( 'Add Product Category' ),
		'new_item_name'     => __( 'Product Category Name' ),
		'menu_name'         => __( 'Product Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'product-category' ),
	);

	register_taxonomy( 'product-category', array( 'product' ), $args );
?>