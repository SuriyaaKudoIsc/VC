// SpecialVC.php
class SpecialVC extends SpecialPage {

    public function execute() {
        if ( BetaFeatures::isFeatureEnabled( $this->getUser(), 'my-awesome-feature' ) ) {
            // Implement the feature!
        }
    }
}
