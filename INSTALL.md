# Installation

If you want to install this MediaWiki extension on your wiki to see if it works or troubleshoot problems with your adaptation.

## MediaWiki 1.25 or above
* Download and place the file(s) in a directory called `VC` in your `extensions/` folder.
* Add the following code at the bottom of your LocalSettings.php:

        wfLoadExtension( 'VC' );

* Visit `Special:VC` to verify the extension is working.
* Done - Navigate to `Special:Version` on your wiki to verify that the extension is successfully installed.

## MediaWiki 1.24 or earlier
To users running MediaWiki 1.24 or earlier:

        require_once "$IP/extensions/VC/VC.php";
