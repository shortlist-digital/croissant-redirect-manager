<?php

use CroissantRedirectManager\CustomField\RedirectField;
use Brain\Monkey;
use Brain\Monkey\Functions;

class TestRedirectCustomFields extends PHPUnit_Framework_TestCase
{
	protected function setUp() {
		parent::setUp();
		Monkey\setUp();
	}

	public function test_register_fields() {
		Functions\expect('acf_add_local_field_group')
			->once()
			->with(Mockery::type('array'));

		$obj = new RedirectField();
		$obj->register_fields();
	}

	protected function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}
}
