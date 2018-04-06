<?php

use CroissantRedirectManager\PostType\RedirectRule;
use Brain\Monkey;
use Brain\Monkey\Functions;

class TestRedirectRulePostType extends PHPUnit_Framework_TestCase
{
	protected function setUp() {
		parent::setUp();
		Monkey\setUp();
	}

	public function test_register_hooks_method_is_working() {
		$obj = new RedirectRule();
		$obj->register_hooks();

		$this->assertTrue(has_action('init', [$obj, 'register_post_type']));
	}

	public function test_register_post_type() {
		Functions\expect('register_post_type')
			->once()
			->with('croissant_redirect', Mockery::type('array'));

		$obj = new RedirectRule();
		$obj->register_post_type();
	}

	protected function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}
}
