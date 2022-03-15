<?php
/*
 * This file is part of the package nitsan/site-default.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

// Provide detailed information and depenencies of EXT:ns_theme_cleanblog
$EM_CONF['ns_theme_cleanblog'] = array(
	'title' => "TU-DO's NITSAN Clean Blog fork",
	'description' => "The TU-DO Makerspace's fork of NITSAN's Clean Blog theme",
	'category' => 'templates',
	'author' => 'Patrick Pedersen',
	'author_email' => 'ctx.xda@gmail.com',
	'author_company' => 'TU-DO Makerspace',
	'state' => 'stable',
	'version' => '3.0.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '10.0.0-11.5.99',
			'news' => '9.0.0-9.99.99',
			'ns_basetheme' => '10.0.0-11.5.99',
			'ns_news_comments' => '5.0.0-5.5.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
?>
