<?php
// VC.php

// Registering features with MediaWiki
$wgExtensionCredits['vcclass'][] = array(
    'path' => __FILE__,
    'name' => 'VC',
    'author' => 'Suriyaa Sundararuban', 
    'url' => 'https://extensions.inc.isc/wiki/VC', 
    'description' => 'The MediaWiki version compatiblity (VC) checker extension for iSC Inc. wikis.',
    'version'  => 1.0.0,
);

// Preparing classes for autoloading
$wgAutoloadClasses['VC'] = __DIR__ . '/VC.body.php';

// Load the localisation file
$wgExtensionMessagesFiles['VC'] = dirname( __FILE__ ) . '/VC.i18n.php';

// VC is a Beta Feature for MediaWiki!
$wgAutoloadClasses['VCHooks'] = __DIR__ . '/VCHooks.php';
$wgHooks['GetBetaFeaturePreferences'][] = 'VCHooks::getPreferences';

// Include versioncompatibility.php file
include 'versioncompatibility.php';
?>
