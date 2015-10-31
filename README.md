# Version compatiblity (VC)

  > The MediaWiki version compatiblity (VC) for iSC Inc. wikis.

## Method 1

Add to the LocalSettings.php:

    require_once( "$IP/extensions/v1.24/V/VC/versioncompatibility.php" );

## Method 2

Add to your extension:

    if ( version_compare( $wgVersion, '1.24', '<' ) ) {
    	die( "This iSC Inc. extension requires MediaWiki 1.24+\n" );
    }
