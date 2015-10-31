// VCHooks.php
class VCHooks {

    static function getPreferences( $user, &$prefs ) {
        global $wgExtensionAssetsPath;

        $prefs['my-awesome-feature'] = array(
            // The first two are message keys
            'label-message' => 'beta-feature-message',
            'desc-message' => 'beta-feature-description',
            // Paths to images that represents the feature.
            // The image is usually different for ltr and rtl languages.
            // Images for specific languages can also specified using the language code.
            'screenshot' => array(
                'ru' => "$wgExtensionAssetsPath/MyExtension/images/screenshot-ru.png",
                'ltr' => "$wgExtensionAssetsPath/MyExtension/images/screenshot-ltr.png",
                'rtl' => "$wgExtensionAssetsPath/MyExtension/images/screenshot-rtl.png",
            ),
            // Link to information on the feature - use subpages on mw.org, maybe?
            'info-link' => 'https://extensions.inc.isc/wiki/VC',
            // Link to discussion about the feature - talk pages might work
            'discussion-link' => 'https://extensions.inc.isc/wiki/Talk:VC',
        );
    }
}
