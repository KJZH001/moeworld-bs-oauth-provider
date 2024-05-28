<?php

namespace LittleSkinChina\BsSocialiteProviderMoeWorld;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LittleSkinExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('moeworld', __NAMESPACE__.'\Provider');
    }
}
