<?php
/**
 * VC extension - The MediaWiki version compatiblity (VC) for iSC Inc. wikis
 *
 * For more info see https://extensions.inc.isc/wiki/VC.
 *
 * @file
 * @ingroup Extensions
 * @author Suriyaa Kudo, 2015
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'VC',
	'author' => array(
		'Suriyaa Sundararuban',
	),
	'version'  => '1.0.0',
	'url' => 'https://extensions.inc.isc/wiki/VC',
	'descriptionmsg' => 'VC-desc',
	'license-name' => 'Apache-2.0',
);

/* Setup */

// Register files
$wgAutoloadClasses['VCHooks'] = __DIR__ . '/VC.hooks.php';
$wgAutoloadClasses['SpecialVC'] = __DIR__ . '/specials/SpecialVC.php';
$wgMessagesDirs['VC'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['VCAlias'] = __DIR__ . '/VC.i18n.alias.php';

// Register hooks
#$wgHooks['NameOfHook'][] = 'VCHooks::onNameOfHook';

// Register special pages
$wgSpecialPages['VC'] = 'SpecialVC';

// Register modules
$wgResourceModules['ext.VC.foo'] = array(
	'scripts' => array(
		'modules/ext.VC.js',
		'modules/ext.VC.foo.js',
	),
	'styles' => array(
		'modules/ext.VC.foo.css',
	),
	'messages' => array(
	),
	'dependencies' => array(
	),

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'examples/VC',
);


/* Configuration */

// Enable Foo
#$wgVCEnableFoo = true;
