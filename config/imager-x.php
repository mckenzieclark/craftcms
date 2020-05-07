<?php

return [
	'cacheDuration' => false,
	'cacheDurationRemoteFiles' => false,
	'cacheEnabled' => true,
	'imagerSystemPath' => '@webroot/cache/imager/',
	'imagerUrl' => '@web/cache/imager/',
	'imgixAPIKey' => getenv('IMGIX_API_KEY'),
	'imgixConfig' => [
		'default' => [
			'domain' => getenv('IMGIX_DOMAIN'),
			'useHttps' => true,
			'signKey' => getenv('IMGIX_SIGN_KEY'),
			'sourceIsWebProxy' => false,
			'useCloudSourcePath' => false,
			'getExternalImageDimensions' => false,
			'defaultParams' => [
				'auto' => 'compress,format'
			],
		],
	],
	'imgixProfile' => 'default',
	'transformer' => getenv('IMAGER_TRANSFORMER') ?: 'craft',
];