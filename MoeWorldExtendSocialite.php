<?php

namespace MoeWorldCN\BsSocialiteProviderMoeWorld;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MoeWorldExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('moeworld', __NAMESPACE__.'\Provider');
    }
}
