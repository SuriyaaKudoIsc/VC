// VC.php

// VC is a Beta Feature for MediaWiki!
$wgAutoloadClasses['VCHooks'] = __DIR__ . '/VCHooks.php';
$wgHooks['GetBetaFeaturePreferences'][] = 'VCHooks::getPreferences';

// Include versioncompatibility.php file
include 'versioncompatibility.php';
