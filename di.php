<?php

use CroissantRedirectManager\CustomField\RedirectField;
use CroissantRedirectManager\PostType\RedirectRule;

$builder = new DI\ContainerBuilder();
$builder->useAnnotations(false);
$builder->addDefinitions([
	'custom_fields' => DI\object(RedirectField::class),
	'redirect' => DI\object(RedirectRule::class)
]);

return $builder->build();
