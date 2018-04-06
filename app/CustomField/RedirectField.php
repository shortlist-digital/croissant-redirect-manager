<?php

namespace CroissantRedirectManager\CustomField;

class RedirectField
{
	private $key = 'croissant_redirects';

	public function register_fields() {
		acf_add_local_field_group(array(
			'key' => $this->key,
			'title' => 'Redirects',
			'fields' => array(
				array(
					'key' => $this->key . '_redirect_from',
					'label' => 'redirect from',
					'name' => $this->key . '_redirect_from',
					'type' => 'text',
					'instructions' => 'do not use full domains, always start with a slash (/) like `/redirect_from_me`',
					'required' => 1,
					'placeholder' => '/redirect_from',
				),
				array(
					'key' => $this->key . '_redirect_to',
					'label' => 'redirect_to',
					'name' => $this->key . '_redirect_to',
					'type' => 'text',
					'instructions' => 'full domain or relative, (if relative, this website domain will be used)',
					'required' => 1,
					'placeholder' => '/redirect_to or http://www.site.com/page/you/want',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'croissant_redirect',
					),
				),
			),
			'active' => 1,
		));
	}
}
