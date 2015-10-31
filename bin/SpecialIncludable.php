<?php
/**
 * A VC Special Page that can be included on a wikipage like
 * {{Special:VC}} as well as being accessed on [[Special:VC]]
 *
 * @file
 * @ingroup Extensions
 *
 * @author Suriyaa Kudo <SuriyaaKudoIsc@users.noreply.github.com> (https://bit.ly/Suriyaa)
 * @ Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author Niklas Laxström
 * @copyright Copyright © 2015-present iSC Inc.
 * @license Apache v2.0
 */

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'VC',
	'description' => 'The MediaWiki version compatiblity (VC) checker extension for iSC Inc. wikis.',
	'author' => 'Suriyaa Sundararuban'
);

$wgSpecialPages['VC'] = 'SpecialVC';

class SpecialVC extends VCSpecialPage {

	public function __construct() {
		parent::__construct( 'VC' );
	}

	/**
	 * Show the page
	 */
	public function execute( $par = null ) {
		if ( $this->including() ) {
			$out = "This iSC Inc.-modified MediaWiki version requires MediaWiki 1.25+!";
		} else {
			$out = "Need MediaWiki v1.25+!";
			$this->setHeaders();
		}

		$this->getOutput()->addWikiText( $out );
	}
}
