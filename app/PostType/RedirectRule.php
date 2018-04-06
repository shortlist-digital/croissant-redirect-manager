<?php

namespace CroissantRedirectManager\PostType;

class RedirectRule
{
	public function register_hooks() {
		add_action( 'init', [ $this, 'register_post_type' ] );
	}

	public function register_post_type() {
		register_post_type( 'croissant_redirect', [
			'labels' => [
				'name' => 'Redirects',
				'singular_name' => 'Redirect'
			],
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => false,
			'show_in_rest' => false,
			'has_archive' => false,
			'supports' => [ 'title' ],
			'capabilities' => [
				'edit_post'          => 'update_core',
				'read_post'          => 'update_core',
				'delete_post'        => 'update_core',
				'edit_posts'         => 'update_core',
				'edit_others_posts'  => 'update_core',
				'delete_posts'       => 'update_core',
				'publish_posts'      => 'update_core',
				'read_private_posts' => 'update_core',
			]
		]);
	}
}
