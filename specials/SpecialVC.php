<?php
/**
 * Special Page for VC extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialVC extends SpecialPage {
	public function __construct() {
		parent::__construct( 'VC' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 *  [[Special:VC/subpage]].
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'VC-VC' ) );

		$out->addWikiMsg( 'VC-VC-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
