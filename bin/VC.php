<?php
// VC.php

// Extension registration
<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'VC' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['VC'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['VCAlias'] = __DIR__ . '/VC.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for FooBar extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the VC extension requires MediaWiki 1.25+' );
}

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
