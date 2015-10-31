<?php
/**
 * Version compatiblity checker (for iSC Inc. wikis)
 * 
 * @author Suriyaa Kudo <SuriyaaKudoIsc@users.noreply.github.com> (http://bit.ly/Suriyaa)
 * @author MediaWiki contributors (https://www.mediawiki.org/wiki/Thread:Project:Support_desk/Set_version_compatibility_for_extension)
 * 
 */
 
if ( version_compare( $GLOBALS['wgVersion'], '1.19', '<' ) ) {
    echo 'All iSC Inc. extensions requires at least the iSC Inc.-modified MediaWiki version 1.19. You have ' . $GLOBALS['wgVersion'];
    exit();
}
 
// Rest of code below!!!
